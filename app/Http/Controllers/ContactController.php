<?php

namespace App\Http\Controllers\Frontend;

use Mail;
use App\Contact;
use App\Mail\ContactMail;
use App\Mail\SendContact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
     // Send Contact
     public function sendphrase(Request $request)
     {
         // Validation
         $this->validate($request, [
             'fullname' => 'required',
			 'email' => 'required',
			 'subject' => 'required',
			 'message' => 'required',
         ]);
 
         // Send contact to Email
         $contact = [
         'fullname' => $request->input('fullname'),
		 'email' => $request->input('email'),
		 'subject'=> $request->input('subject'),
		 'message' => $request->input('message')
         ];
         $email = env("MAIL_USERNAME");

        //  Mail::to($email)->send(new ContactMail($contact));
         return redirect()->back()->with('Success_message', 'Message Sent Successfuly. We will get Back to you Shortly');
     }
 
}
