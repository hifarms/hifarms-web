<?php

namespace App\Http\Controllers;

use App\Order;
use App\Payment;
use App\Order_item;
use App\WalletTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class WalletController extends Controller
{
    public function MakePayment(Request $request,Order $order){

       $wallet = Auth::user()->wallet();

       if($wallet->ledger_balance < $order->amount){
        return redirect()->back()->with('error','Sorry you dont have enough fund in wallet');
       }

       $newTransaction = new WalletTransaction();
        $newTransaction->wallet_id = $wallet->id;
        $newTransaction->transaction_type= 2; // debit;
        $newTransaction->transaction_status= 1; // Success;
        $newTransaction->amount = $order->amount;

        $wallet->current_balance = $wallet->current_balance - $order->amount;
        $wallet->save();
        $newTransaction->amount_before = $wallet->current_balance;
        $newTransaction->amount_after = $order->amount - $wallet->current_balance;
        $newTransaction->description = 'Deducting Fund From Wallet For ORDERID '.$order->id;
        $newTransaction->save();

        if(!$newTransaction){
            $newTransaction->transaction_status= 2; // Failed;
            $newTransaction->save();
            redirect()->back()->with(['error'=>'Sorry Operation Failed Try Again Later']);
        }
        
        $ID='HF-'.Str::random(8).rand(1000);
        $payment = new Payment();
        $payment->ref_id = $ID;
        $payment->date_of_payment = Date::now();
        $payment->status_code = 200;
        $payment->status_message = "success";
        $payment->transaction_status = "successfully";
        $payment->save();

        $order->payment_id =$payment->id;
        $order->save();

        redirect()->back()->with('success','Order successfully placed');
    }

    public function moveToWallet(Request $request){
        $id = $request->id;
        $user = auth()->user();
        $investment = Order_item::where('id',$id)->first();

        if($investment->order->user_id != $user->id || !boolval($investment->delivered) || boolval($investment->cleared_to_wallet)){
            return response()->json(['error'=>'Invalid Request'], 410);
        }

        //moving fund to wallet
        $amount =$investment->amount + ($investment->returntype->percentage/100)*$investment->amount;
        $investment->cleared_to_wallet=1;
        $investment->save();

       $wallet= $user->wallet;
       $wallet->balance += $amount;
       $wallet->save();
        return response()->json(['success'=>'Moved to wallet successfully'], 200);

    }

    public function terminateToWallet(Request $request){
        $id = $request->id;
        $user = auth()->user();
        $investment = Order_item::where('id',$id)->first();

        if($investment->order->user_id != $user->id || boolval($investment->cleared_to_wallet)){
            return response()->json(['error'=>'Invalid Request'], 410);
        }

        //moving fund to wallet
        $amount = $investment->amount;
        $investment->cleared_to_wallet=1;
        $investment->save();

        $wallet= $user->wallet;
        $wallet->balance += $amount;
        $wallet->save();
        return response()->json(['success'=>'Terminated succcessfully'], 200);

    }

}