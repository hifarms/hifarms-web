<?php

namespace App\Http\Controllers;

use App\Order;
use App\Payment;
use App\withdraw;
use App\Order_item;
use App\WalletTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;

class WalletController extends Controller
{   
    public function __construct() {

        $this->middlewere(['auth']);
    }
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
        $validator = Validator::make($request->all(), [
            'id' => 'required',
          
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $id = $request->id;
        $user = auth()->user();
        $investment = Order_item::where('id',$id)->firstOrFail();

        if($investment->order->user_id != $user->id || !boolval($investment->delivered) || boolval($investment->cleared_to_wallet)){
            return response()->json(['error'=>'Invalid Request'], 410);
        }
        DB::transaction(function () use($investment,$user) {
         //moving fund to wallet
        $amount =$investment->amount + ($investment->returntype->percentage/100)*$investment->amount;
        $investment->cleared_to_wallet=1;
        $investment->save();

       $wallet= $user->wallet;
       $wallet->balance += $amount;
       $wallet->leger_balance += $amount;
       $wallet->save();
        });
       
        return response()->json(['success'=>'Moved to wallet successfully'], 200);

    }

    public function terminateToWallet(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
          
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $id = $request->id;
        $user = auth()->user();
        $investment = Order_item::where('id',$id)->firstOrFail();

        if($investment->delivered==1 && $investment->move_to_wallet=1){
            
            return response()->json(['error'=>'Already moved to wallet'], 401);

        }

        if($investment->order->user_id != $user->id || boolval($investment->cleared_to_wallet)){
            return response()->json(['error'=>'Invalid Request'], 401);
        }
        DB::transaction(function () use( $investment,$user) {
             //moving fund to wallet
        $amount = $investment->amount;
        $investment->cleared_to_wallet=1;
        $investment->save();

        $wallet= $user->wallet;
        $wallet->balance += $amount;
        $wallet->ledger_balance += $amount;
        $wallet->save();
        });
       
        return response()->json(['success'=>'Terminated succcessfully'], 200);

    }

    public function withdrawRequest(Request $request){
        
        $amount = $request->amount;
        $user = auth()->user();
        if($user->wallet->ledger_balance < intval($amount) || intval($amount)==0){
            return response()->json(['error'=>'You dont have such amount in ledger balance/Invalid amount'], 410);
        }


        if($user->bank->bank_acc_no==null && $user->bank->bank_name==null){
            return response()->json(['error'=>'Please Set Your Bank Details in Profile, Try Again'], 410);
        }
        
        $withdraw = new withdraw();
        $withdraw->user_id = $user->id;
        $withdraw->amount = $amount;
        $withdraw->withdraw_status_id = 1;
        $withdraw->save();

        $wallet= $user->wallet;
        $wallet->ledger_balance -= $amount;
        $wallet->save();
       
        return response()->json(['success'=>'Request is sent successfully'], 200);

    }

}