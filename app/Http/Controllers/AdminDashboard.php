<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Farm;
use App\User;
use App\label;
use App\Order;
use App\Wallet;
use App\Message;
use App\Product;
use App\BlogPost;
use App\Category;
use App\withdraw;
use App\Farm_type;
use App\Order_item;
use App\blogCategory;
use App\Product_type;
use App\withdrawStatus;
use App\Farm_return_type;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
	
	public function AdminDashboard(Request $request)
    {   
        

        if($request->input('search')){
            $products = Product::where('id','like','%'.$request->input('search').'%')->orWhere('name','like','%'.$request->input('search').'%')->paginate(20);
            session()->flashInput($request->input());
        }else{
            $products = Product::paginate(7);
        }
        $data['users'] = User::where('status', 1)->count();
        $data['products'] = Product::count();
        $data['orders'] = Order_item::count();
        $data['product'] = $products;
        $data['category'] = Category::get();
        $data['label'] = label::get();
        return view('admin.adminDashboard', $data);
    }

    public function AdminInvest(Request $request)
    {
        $sort = $request->input('sort')=="new"? "DESC" : "ASC";

        $farms= Farm::where('active','=',1)->orderBy('created_at',$sort);

        session()->flashInput($request->input());

        if($request->input('range')){
            $farms= $farms->where('unit_price',"<",$request->input('range'));
        }

        if($request->input('category')){
            $farms= $farms->whereIn('category_id',$request->input('category'));
        }

        $farms= $farms->paginate(50)->withQueryString();
        
        $data['category'] = Category::get();
        $data['farmtype'] = Farm_type::get();
        $data['invests'] = Farm_return_type::get();
        $data['farmproduct'] = $farms;
        return view('admin.adminInvest', $data);
    }

    public function AdminInvestReturns()
    {
        $totalreturn = 0;
        $totalinvest = 0;
        $active=0;
        $activeinvest = Order_item::get();
        foreach ($activeinvest as $invest) {
            if ($invest->order->payment == null || boolval($invest->product_id)) {
                continue;
            }
            $data['per'] = Farm_return_type::where('id',$invest->farm_return_type_id)->first();
            $rtn = ($data['per']->percentage / 100)*$invest->amount;
            $totalinvest = $totalinvest + $invest->amount;
            $totalreturn = $totalreturn + $rtn;
            $active++;
        }
        return view('admin.adminInvestReturns', ['totalinvest'=>$totalinvest,'totalreturn'=>$totalreturn,'active'=>$active, 'activeinvest'=>$activeinvest]);
    }

    public function AdminMarketplace(Request $request)
    {
        $sort = $request->input('sort')=="new"? "DESC" : "ASC";

        $products= Product::where('active','=',1)->orderBy('created_at',$sort);

        session()->flashInput($request->input());

        if($request->input('range')){
            $products= $products->where('price',"<",$request->input('range'));
        }

        if($request->input('category')){
            $products= $products->whereIn('category_id',$request->input('category'));
        }

        $products= $products->paginate(50)->withQueryString();
        $data['category'] = Category::get();
        $data['producttype'] = Product_type::get();
        $data['label'] = label::get();
        $data['products'] = $products;
        $data['product'] = Product::first();
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

    public function AdminWallet(Request $request)
    {
        if($request->input('search')){
            $orders = Order::where('id','like','%'.$request->input('search').'%')->orWhere('user_id','like','%'.$request->input('search').'%')->paginate(50);
            session()->flashInput($request->input());
        }else{
            $orders = Order::paginate(50);
        }
        $data['ledgerbalance'] = Wallet::sum('ledger_balance');
        $data['balance'] = Wallet::sum('balance');
        $data['amount'] = Withdraw::sum('amount');
        $data['orders'] = $orders;
        return view('admin.adminWallet', $data);
    }

    public function AdminWithdraw(Request $request)
    {   
        if($request->input('search')){
            $with = Withdraw::where('id','like','%'.$request->input('search').'%')->orWhere('user_id','like','%'.$request->input('search').'%')->paginate(50);
            session()->flashInput($request->input());
        }else{
            $with = Withdraw::paginate(50);
        }
        $data['ledgerbalance'] = Wallet::sum('ledger_balance');
        $data['balance'] = Wallet::sum('balance');
        $data['amount'] = Withdraw::sum('amount');
        $data['withdraws'] = $with;
        return view('admin.adminWithraw', $data);
    }

    public function AdminBlog(Request $request)
    {   
        if($request->input('search')){
            $posts = BlogPost::where('id','like','%'.$request->input('search').'%')->orWhere('title','like','%'.$request->input('search').'%')->paginate(50);
            session()->flashInput($request->input());
        }else{
            $posts = BlogPost::paginate(10);
        }

        $data['posts'] = $posts;
        $data['editposts'] = BlogPost::first();
        $data['allblog'] = BlogPost::count();
        $data['blogcategory'] = blogCategory::get();
        return view('admin.adminBlog', $data);
    }

    public function AdminSettings()
    {
        $data['user'] = User::where('role_id', 2)->get();
        $data['users'] = User::where('status', 1)->count();
        $data['products'] = Product::count();
        $data['orders'] = Order_item::count();

        $data['messages'] = Message::where('recipient_id',0)->orWhere('sender_id',0)->orderBy('created_at','DESC')->get();
        return view('admin.adminSettings', $data);
    }

    Public function addUser(Request $request) {

        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users|email',
             'password' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->with('warning_message', 'Email is already taken');
        }
        $link = Str::random(30);
        $user = new User();
        $wallet = new Wallet();
        $bank = new Bank();
        $message = new Message();
        DB::transaction(function () use($request,$user,$wallet,$link,$bank,$message){
            
        // Save Record into user DB
       
        $user->email = $request->input('email');
        $user->fullname = $request->input('email');
        $user->username = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = 2;
        $user->activated = $link;
        $user->status = 1;
        $user->is_verified = 1;
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
        
        return redirect()->back()->with('success_message', 'Account Created succesfully');
    }
    
    public function changeStatus(Request $request)
    {
        $with= withdraw::where('id',$request->id)->firstOrFail();
        $status = withdrawStatus::where('id',$request->status)->first();
        $with->withdraw_status_id = $request->status;
        $with->save();
        if($status->name=='paid'){
            $user = $with->user->wallet;
            $user->balance=$user->balance-$with->amount;
            $user->save();

            $message = new Message();
            $message->sender_id = 0;
            $message->recipient_id =$with->user->id;
            $message->message_body = "Your Withdrawal #".$with->id." has being Paid";
            $message->save();
        }
        elseif($status->name=="processing"){
            $message = new Message();
            $message->sender_id = 0;
            $message->recipient_id =$with->user->id;
            $message->message_body = "Your Withdrawal #".$with->id." is being Processing";
            $message->save();
        }
        return redirect()->back()->with(['success_message'=>"Status changed Succesfully"]);
    }
}
