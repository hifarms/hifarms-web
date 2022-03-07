<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //Userdasboard/investment PAGE
    public function viewInvestment(Request $request){

        $user = User::with(['investments'=>function($query){
            $query->where('farm_id','!=',null)->get();
        }])->where('user_id','=',Auth::user()->id)->get();
        
        return view('userdashboard.investment',['$user'=>$user]);

   }

     //Userdasboard/Maketpalace/orders PAGE
    public function viewOrders(Request $request){

        $user = User::with(['orders'=>function($query){

            $query->where('product_id','!=',null)->get();

        }])->where('user_id','=',Auth::user()->id)->get();

        return view('userdashboard.orders',['$user'=>$user]);
   }

    //Userdasboard/wallect PAGE
   public function Wallet(Request $request){

        $user = Auth::user();

        $transactions = $user->wallet()->walletTransactions()->paginate(20);

        return view('wallet.view',['$user'=>$user,'transactions'=>$transactions]);
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
