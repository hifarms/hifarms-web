<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ResetPasswordController extends Controller
{   
    public function forgetPassword(Request $request) {
        return view('forgotten');

    }
    public function ForgetPasswordStore(Request $request) {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);
        $exist = DB::table('password_resets')
        ->where([
          'email' => $request->email
        ])
        ->delete();
        
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token
        ]);

        // Mail::send('emails.forget-password-email', ['token' => $token], function($message) use($request){
        //     $message->to($request->email);
        //     $message->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
        //     $message->subject('Reset Password');
        // });

        return redirect()->back()->with('success_message', 'Reset email link sent successfully, please check your inbox or spam');

    }

    public function ResetPasswordForm(Request $request) {
        $updatePassword = DB::table('password_resets')
                             ->where([
                               'token' => $request->token
                             ])
                             ->first();
        return view('new-password', ['token' => $request->token]);
     }


     public function ResetPasswordFormStore(Request $request)
     {
         $request->validate([
            'password' => 'required|confirmed|string',
         ]);
 
         $updatePassword = DB::table('password_resets')
                             ->where([
                               'token' => $request->token
                             ])
                             ->first();
 
         if(!$updatePassword){
             return back()->withInput()->with('warning_message', 'Invalid token! please try forgotten password again');
         }
 
         $user = User::where('email', $updatePassword->email)
                     ->update(['password' => Hash::make($request->password)]);

         DB::table('password_resets')->where(['email'=> $updatePassword->email])->delete();
 
         return redirect('/signin')->with('success_message', 'Your password has been changed!');
     }
}

