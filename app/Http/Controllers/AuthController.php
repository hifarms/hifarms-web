<?php
namespace App\Http\Controllers;

use App\Bank;
use App\User;
use App\Wallet;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\UserRegistration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Login Function
    public function signin(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' => '1', 'status' =>'1'])) {

            if(!boolval(auth()->user()->status)){
                Auth::logout();
                return redirect()->back()->with('warning_message','Your Account is Suspended');
            }

            // return redirect()->back()->with('success_message','Login Sucess');
            return redirect('/dashboard');
        }

        // \Session::flash('warning_message', 'These credentials do not match our records.');

        return redirect()->back()->with('warning_message','These credentials do not match our records');
    }

    //Save Users Function
    public function signup(Request $request)
    {
        // Validation
        $this->validate($request, [
            'fullname' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed|min:4',
        ]);

        $link = Str::random(30);
        $user = new User();
        $wallet = new Wallet();
        $bank = new Bank();
        DB::transaction(function () use($request,$user,$wallet,$link,$bank){
            
// Save Record into user DB
       
        $user->email = $request->input('email');
        $user->fullname = $request->input('fullname');
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = 1;
        $user->activated = $link;
        $user->status = 1;
        $user->save();
        
        //Save Record into profile DB
       
        $wallet->user_id = $user->id;
        $wallet->ledger_balance = 0;
        $wallet->balance = 0;
        $wallet->save();

        $user->wallet_id = $wallet->id;

        $bank->user_id =$user->id;
        $bank->save();
        $user->bank_id = $bank->id;
        $user->save();
        });
        

        Auth::login($user);

        $user = Auth::user();

        // Mail::to($user->email)->send(new UserRegistration($user,$link));
        return redirect()->back()->with('Success_message', 'You have successfully registered, Email Has Been Sent To You For Verification.');
    }

    // Logout Function
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function activatesystemuser($id)
    {
            $user = Auth::user();

            User::where(['id'=>$id])
                ->update(array('status' => 1 ));

            \Session::flash('success_message','Activation Successfully');

         return redirect()->route('activatesuccess')->with('Success_message', 'Activation Successfully');;
    }

    public function signUpForm(){

        return view('signup');
    }

    public function verifyEmail(Request $request){

        $user = User::where('activated','=',$request->input('token'))->firstOrFail();
        if(!$user){
            return view('signin')->with('Error','Failed To Verify Email');
        }
        $user->is_verified = 1;
        $user->save();
        return view('signin')->with('Success_message','Your Email Is VeriFied');
    }

    public function signInForm(){

        return view('signin');
    }

    //Google Login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    //Google Callback
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $this-> _registerOrLoginUser($table);

        //Return to Idex after sign in
        return redirect()->route('index');
    }


    //Facebook Login
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    //Facebook Callback
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $this-> _registerOrLoginUser($table);

        //Return to Idex after sign in
        return redirect()->route('index');
    }

    protected function _registerOrLoginUser($table)
    {
        $user = User::where('email', '=', $table->email)->first();
        if(!$table){
            $table = new User();
            $table->name = $table->name;
            $table->email = $table->email;
            $table->provider_id = $table->id;
            $table->avatar = $table->avatar;
            $table->save();
        }

        Auth::login($table);
    }
}
