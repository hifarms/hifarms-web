<?php

namespace App\Http\Controllers;

use App\Farm;
use App\Order;
use App\Payment;
use App\Cart_item;
use App\Order_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{    
    public function __construct(){
        
        $this->middleware('auth');
    }

    public function checkout(Request $request){


        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->save();

        $total =0;
        //
        $tempid=$request->cookie('carts');
        $cartitems = Cart_item::where('temp_id',$tempid)->get();
        foreach($cartitems as $item){
            $orderitem = new Order_item();
            $orderitem->order_id = $order->id;
            //
            $orderitem->cleared_to_wallet = 0;
            $orderitem->delivered = 0;
            $orderitem->unit = $item->unit;
           
            // $orderitem->farm_id = $item->farm_id;
            // $orderitem->farm_return_type_id = $item->farm_return_type_id;

            if(boolval($item->farm_id)){
                $orderitem->farm_id = $item->farm_id;
                $orderitem->farm_return_type_id = 1;
                $orderitem->amount = $item->farm->unit_price * $item->unit;
            }
            else if(boolval($item->product_id)){
                $orderitem->product_id = $item->product_id;
                $orderitem->amount = $item->product->price;
            }

            $orderitem->save();
            $total=$total+$orderitem->amount;

         
        }
        $order->total_amount = $total;
        $order->save();
        $orderData= Order::with('user')->where('id',$order->id)->firstorFail();
        return response()->json($orderData, 200);


        // if(boolval($request->payment_through_wallet)){

        //     return redirect()->action('${App\Http\Controllers\WallectController@makePayment}', ['order' => $order]);
        // }

        // return redirect()->action('${App\Http\Controllers\FlutterController@makePayment}', ['order' => $order]);
    }

    public function singleCheckout(Request $request,Farm $farm){
      
      $order = new Order();
      $order->user_id = Auth::user()->id;
      $order->save();
      $total =0;

          $orderitem = new Order_item();
          $orderitem->order_id = $order->id;
          $orderitem->cleared_to_wallet = 0;
          $orderitem->delivered = 0;
          $orderitem->unit = 1;
          $orderitem->amount = $farm->unit_price;
          $orderitem->farm_id = $farm->id;
          $orderitem->farm_return_type_id = 1;
          $orderitem->save();
       
      
      $order->total_amount = $farm->unit_price;
      $order->save();
      $orderData= Order::with('user')->where('id',$order->id)->first();
      return response()->json($orderData, 200);

    }

    public function verifyTransaction(Request $request){
        
        $tempid=$request->cookie('carts');
        $cartitems = Cart_item::where('temp_id',$tempid)->delete();

        $ref = $request->input('trxref');
        $curl = curl_init();
  
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$ref,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer sk_live_d348a363b8d4f7b2b020aead86e18534817240aa",
            "Cache-Control: no-cache",
          ),
        ));
        
        $response  = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $response =json_decode($response);
        if ($err) {
          return view('test',['msg'=>$err]);
        }
        if($response->status){
            $payment = new Payment();
            $payment->ref_id = $response->data->reference;
            $payment->status_code =200;
            $payment->status_message = $response->data->status;
            $payment->payment_method = $response->data->channel;
            $payment->transaction_status = 1;
            $payment->save();

           
        }else{
          $payment = new Payment();
            $payment->ref_id = $response->data->reference;
            $payment->status_code =201;
            $payment->status_message = $response->data->status;
            $payment->payment_method = $response->data->channel;
            $payment->transaction_status = 1;
            $payment->save();

            
        }
        $order = Order::where('id',$response->data->metadata->custom_fields[0]->value)->first();
        $order->payment_id = $payment->id;
        $order->save();
        return redirect('/investment');

        
    }
}