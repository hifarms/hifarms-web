<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function subscribe(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $Subcribe =new Subscribe();
        $Subcribe->email = $request->email;
        $Subcribe->save();

    }

    public function sendNewsletter(Request $request){
        
        $validator = Validator::make($request->all(), [
            'content' => 'required|string',
            
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $subscribers = Subscribe::all();

        //job to handle email processing HandleEmail(subscribe,$request->content)

    }
	
	public function AdminDashboard()
    {
        return view('admin.adminDashboard');
    }

    public function AdminInvest()
    {
        return view('admin.adminInvest');
    }

    public function AdminInvestReturns()
    {
        return view('admin.adminInvestReturns');
    }

    public function AdminMarketplace()
    {
        return view('admin.adminMarketplace');
    }

    public function AdminmyFarm()
    {
        return view('admin.adminMyFarm');
    }

    public function AdminProfile()
    {
        return view('admin.adminProfile');
    }

    public function AdminWallet()
    {
        return view('admin.adminWallet');
    }

    public function AdminSettings()
    {
        return view('admin.adminSettings');
    }
}
