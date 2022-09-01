<?php
namespace App\Http\Controllers;

use App\Bank;
use App\User;
use App\Wallet;
use App\Message;
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

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {

            if(!boolval(auth()->user()->status)){
                Auth::logout();
                return redirect()->back()->with('warning_message','Your Account has been Suspended');
            }

            if(!boolval(auth()->user()->is_verified)){
                Auth::logout();
                return redirect()->back()->with('warning_message','Verification link has been sent to your email, kindly verify');
            }

            if(auth()->user()->isUser()){
                return redirect('/dashboard');
            }

            // return redirect()->back()->with('success_message','Login Sucess');
            return redirect()->intended(route('admindashboard'));
        }


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
        $message = new Message();
        DB::transaction(function () use($request,$user,$wallet,$link,$bank,$message){
            
// Save Record into user DB
       
        $user->email = $request->input('email');
        $user->fullname = $request->input('fullname');
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = 2;
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

        $message->sender_id = 0;
        $message->recipient_id =$user->id;
        $message->message_body = "Let's get started ".$user->username;
        $message->save();
        });
       

         Mail::to($user->email)->send(new UserRegistration($user,$link));
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

        $user = User::where('activated','=',$request->input('token'))->first();
        if(!$user){
            return redirect('signin')->with('warning_message','Failed To Verify Email, Expired or Invalid Token');
        }
        $user->is_verified = 1;
        $user->save();
        return redirect('signin')->with('success_message','Your Email Is VeriFied, You can now Login');
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

        $this-> _registerOrLoginUser($user);

        //Return to Idex after sign in
        return redirect('/dashboard');
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

        $this-> _registerOrLoginUser($user);

        //Return to Index after sign in
        return redirect('/dashboard');
    }

    protected function _registerOrLoginUser($table)
    {
        $user = User::where('email', '=', $table->email)->first();
        if(!$table){
            $user = new User();
            $user->name = $table->name;
            $user->email = $table->email;
            $user->provider_id = $table->id;
            $user->avatar = $table->avatar;
            $user->save();
        }

        Auth::login($user);
    }

    
    public function deleteuser($id)
    {
        // Delete User
        $user = User::where('id', $id)->first();
        $user->delete();

        \Session::flash('success_message', 'You Have Successfully Deleted User');

        return back();
    }
}
