<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Login Function
    public function signin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);
        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput($request->all());
        }

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' => '1', 'status' =>'1'])) {

            return redirect()->back()->with('success_message','Login Sucess');
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
            'password' => 'required|min:4',
            'confirm_password' => 'required|same:password',
        ]);

        $link = Str::random(30);

        // Save Record into user DB
        $user = new User();
        $user->email = $request->input('email');
        $user->fullname = $request->input('fullname');
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = 1;
        $user->activated = $link;
        $user->status = 1;
        $user->save();
        
        // Save Record into profile DB
        // $profile = new Profile();
        // $profile->user_id = $user->id;
        // $profile->fname = $request->input('fname');
        // $profile->lname = $request->input('lname');
        // $profile->phone = $request->input('phone');
        // $profile->save();

        Auth::login($user);

        $user = Auth::user();

        $user->activated = $link;

        //Mail::to($user->email)->send(new UserRegistration($user));

        //\Session::flash('Success_message', 'You have successfully registered');

        return redirect()->back()->with('Success_message', 'You have successfully registered');
    }

    // Logout Function
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function activatesystemuser($id)
    {
            $user = Auth::user();

            User::where(['id'=>$id])
                ->update(array('status' => 1 ));

            \Session::flash('success_message','Activation Successfully');

         return redirect()->route('activatesuccess');
    }

    public function signUpForm(){

        return view('signup');
    }

    public function signInForm(){

        return view('signup');
    }
}
