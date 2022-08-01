<?php

namespace App\Http\Controllers;

use App\blogCategory;
use App\BlogPost;
use App\Category;
use App\Product;
use App\User;
use App\Wallet;
use App\Withdraws;
use App\Farm;
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
        $data['users'] = User::where('status', 1)->count();
        $data['products'] = Product::count();
        $data['product'] = Product::paginate(7);
        return view('admin.adminDashboard', $data);
    }

    public function AdminInvest()
    {
        $data['category'] = Category::get();
        $data['products'] = Product::paginate(5);
        $data['farmproduct'] = Farm::paginate(7);
        return view('admin.adminInvest', $data);
    }

    public function AdminInvestReturns()
    {
        return view('admin.adminInvestReturns');
    }

    public function AdminMarketplace()
    {
        $data['category'] = Category::get();
        $data['products'] = Product::paginate(5);
        return view('admin.adminMarketplace', $data);
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
        $data['ledgerbalance'] = Wallet::sum('ledger_balance');
        $data['balance'] = Wallet::sum('balance');
        // $data['amount'] = Withdraws::sum('amount');
        // $data['withdraws'] = Withdraws::all();
        return view('admin.adminWallet', $data);
    }

    public function AdminBlog()
    {
        $data['posts'] = BlogPost::all();
        $data['editposts'] = BlogPost::first();
        $data['allblog'] = BlogPost::count();
        $data['blogcategory'] = blogCategory::get();
        return view('admin.adminBlog', $data);
    }

    public function AdminSettings()
    {
        $data['user'] = User::where('role_id', 1)->get();
        $data['users'] = User::where('status', 1)->count();
        $data['products'] = Product::count();
        return view('admin.adminSettings', $data);
    }
}
