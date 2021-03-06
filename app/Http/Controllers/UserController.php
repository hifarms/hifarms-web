<?php

namespace App\Http\Controllers;

use App\Farm;
use App\User;
use App\Order;
use App\Product;
use App\Farm_return_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth');
    }

   public function dashboard(){
    $product = count(Product::all());
    $farms = count(Farm::where('user_id',auth()->user()->id)->get());
    $orders = Order::where('user_id',auth()->user()->id)->get();
    $active=0;
    foreach($orders as $order){
        // if($order->payment->status_code !== 200 || $order->payment->status_message !== 'success'){
        //     continue;
        // }
        $active=$active+count($order->orderitems->where('delivered',0));
    }
    return view('dashboard',['product'=>$product,'farm'=>$farms,'active'=>$active]);

   }

   public function farmIndex(Request $request){
       $farms = Farm::where('user_id',auth()->user()->id)->get();
       $livestokeCount = 0;
       $cropCount = 0;
       foreach($farms as $farm){
           if($farm->farm_type->name == 'Livestock'){
               $livestokeCount++;
               continue;
           }
           $cropCount++;
       }

       return view('livestock',['livestock'=>$livestokeCount,'crop'=>$cropCount]);
   }


    //Userdasboard/investment PAGE
    public function investment(Request $request){

        $user = auth()->user();
        $total_return=0;
        $active=0;
        $total_invest=0;
        $active_invest=$user->investments->where('delivered',0)->where('cleared_to_wallet',0);
        foreach($active_invest as $invest){
            if($invest->order->payment==null || boolval($invest->product_id)){
                continue;
            }
            $per = Farm_return_type::where('id',$invest->farm_return_type_id)->first();
            $rtn=($per->percentage/100)*$invest->amount;
            $total_invest=$total_invest+$invest->amount;
            $total_return=$total_return+$rtn;
            $active++;
        }
        // $investment= User::with(['investments'=>function($query){
        //     $query->where('farm_id','!=',null)->get();
        // }])->where('id','=',Auth::user()->id)->get();
        
        return view('invest-returns',['user'=>$user,'total_invest'=>$total_invest,'total_return'=>$total_return,'active'=>$active]);

   }

   public function Profile(){
    $user = auth()->user();
       return view('profile',['user'=>$user]);
   }

     //Userdasboard/Maketpalace/orders PAGE
    public function viewOrders(Request $request){

        $user = User::with(['orders'=>function($query){

            $query->where('product_id','!=',null)->get();

        }])->where('user_id','=',Auth::user()->id)->get();

        return view('userdashboard.orders',['$user'=>$user]);
   }

    //Userdasboard/wallect PAGE
   public function wallet(Request $request){

        $user = Auth::user();

        $totalspend=0;
        foreach($user->investments as $investment){
        if($investment->order->payment && $investment->order->payment->status_code==200){
                $totalspend+=$investment->amount;
            }
         }
        return view('wallet',['user'=>$user,'totalspend'=>$totalspend]);
    }

//Moving Farm investment Return/payment to wallet
    public function moveToWallet(Request $request,Order_item $item){
        
        $this->authorize('view', $item);

        if($item->cleared_to_wallet && $item->delivered){

            redirect()->back()->with(['error'=>'Sorry cant move the fund to Wallet']);
        }
        $userWallet= Auth::user()->wallet()->id;

        $newTransaction = new WalletTransaction();
        $newTransaction->wallet_id = $userWallet->id;
        $newTransaction->transaction_type= 1; // Deposit;
        $newTransaction->transaction_status= 1; // Success;
        $newTransaction->amount = $item->amount;
        $newTransaction->amount_before = $userWallet->current_balance;
        $userWallet->current_balance = $item->amount + $userWallet->current_balance;
        $wallet->save();
        $newTransaction->amount_after =$userWallet->current_balance;
        $newTransaction->description = 'Move Farm investment to Wallet Of itemID '.$item->id;
        $newTransaction->save();

        if(!$newTransaction){
            $newTransaction->transaction_status= 2; // Failed;
            $newTransaction->save();
            redirect()->back()->with(['error'=>'Sorry Operation Failed Try Again Later']);
        }
        
        $item->cleared_to_wallet = 1; // Moved
        $item->save();
        redirect()->back()->with(['success'=>'Fund Moved to Wallet']);

    }

    //Moving Product/service payment to wallet
    public function ProductDelivered(Request $request,Order_item $item) {

        $this->authorize('itemOwner', $item);

        if($item->cleared_to_wallet && $item->delivered && !$item->order()->payment()->status_code = 200){

            redirect()->back()->with(['error'=>'Sorry cant move the fund to Wallet']);
        }
        //Product Owner Wallet
        $userWallet= $item->product()->user()->wallet()->id;

        $newTransaction = new WalletTransaction();
        $newTransaction->wallet_id = $userWallet->id;
        $newTransaction->transaction_type= 1; // Deposit;
        $newTransaction->transaction_status= 1; // Success;
        $newTransaction->amount = $item->amount;
        $newTransaction->amount_before = $userWallet->current_balance;
        $userWallet->current_balance = $item->amount + $userWallet->current_balance;
        $userWallet->save();
        $newTransaction->amount_after =  $userWallet->current_balance;
        $newTransaction->description = 'Received Product/service Payment to Wallet id '.$item->id;
        $newTransaction->save();

        if(!$newTransaction){
            $newTransaction->transaction_status= 2; // Failed;
            $newTransaction->save();
            redirect()->back()->with(['error'=>'Sorry Operation Failed Try Again Later']);
        }
        $item->delivered = 1; //Marked as Delivered
        $item->cleared_to_wallet = 1; // Moved
        $item->save();
        redirect()->back()->with(['success'=>'Fund Moved to Wallet']);

    }

}
