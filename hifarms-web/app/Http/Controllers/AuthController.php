<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\User;
use App\Profile;
use App\Mail\UserRegistration;
use Mail;

class UserController extends Controller
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

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' => '2', 'status' =>'1'])) {

            return redirect()->intended(route('userdasboard'));
        }

        \Session::flash('warning_message', 'These credentials do not match our records.');

        return redirect()->back();
    }

    //Save Users Function
    public function signup(Request $request)
    {
        // Validation
        $this->validate($request->all(), [
            'fname' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'phone' => 'required',
            'password' => 'required|min:4',
            'confirm_password' => 'required|same:password',
        ]);

        $link = Str::random(30);

        // Save Record into user DB
        $user = new User();
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = 2;
        $user->activated = $link;
        $user->status = 0;
        $user->save();
        
        // Save Record into profile DB
        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->fname = $request->input('fname');
        $profile->lname = $request->input('lname');
        $profile->phone = $request->input('phone');
        $profile->save();

        Auth::login($user);

        $user = Auth::user();

        $user->activated = $link;

        Mail::to($user->email)->send(new UserRegistration($user));

        \Session::flash('Success_message', 'You have successfully registered');

        return redirect()->route('userdasboard');
    }

    // Logout Function
    public function logout()
    {
        $user = Auth::user();

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
}
