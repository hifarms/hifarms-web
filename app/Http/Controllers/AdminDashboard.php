<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function subscribe(Request $request){
        //required email

        $Subcribe =new Subscribe();
        $Subcribe->email = $request->email;
        $Subcribe->save();

    }

    public function sendNewsletter(Request $request){
        
        //required content

        $subscribers = Subscribe::all();

        //job to handle email processing HandleEmail(subscribe,$request->content)


    }
}
