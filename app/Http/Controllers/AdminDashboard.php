<?php

namespace App\Http\Controllers;

use App\blogCategory;
use App\BlogPost;
use App\Category;
use App\Product;
use App\User;
use App\Wallet;
use App\Withdraw;
use App\Farm;
use App\Message;
use App\order_item;
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
        $data['orders'] = order_item::count();
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
        $data['crops'] = Farm::where('farm_type_id', 1)->count();
        $data['livestock'] = Farm::where('farm_type_id', 2)->count();
        return view('admin.adminMyFarm', $data);
    }

    public function AdminProfile()
    {
        $data['user'] = auth()->user();
        return view('admin.adminProfile', $data);
    }

    public function AdminWallet()
    {
        $data['ledgerbalance'] = Wallet::sum('ledger_balance');
        $data['balance'] = Wallet::sum('balance');
        $data['amount'] = Withdraw::sum('amount');
        $data['withdraws'] = Withdraw::all();
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
        $data['orders'] = order_item::count();
        $data['messages'] = Message::paginate(9);
        return view('admin.adminSettings', $data);
    }
}
