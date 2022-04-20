<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use Mail;
use App\Mail\SendContact;

class PostController extends Controller
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
         $contact = new Contact();
         $contact->fullname = $request->input('fullname');
		 $contact->email = $request->input('email');
		 $contact->subject = $request->input('subject');
		 $contact->message = $request->input('message');

         $this->email = ['me@gmail.com'];

         Mail::to($this->email)->send(new SendContact($contact));
 
         \Session::flash('Success_message', 'Message Sent Successfuly. We will get Back to you Shortly');
 
         return back();
     }
 
}
