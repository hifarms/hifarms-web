<?php

namespace App\Http\Controllers;

use App\Order;
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
            $orderitem->amount = $item->farm->unit_price * $item->unit;
            // if($item->farm_id){
            //     $orderitem->farm_id = $item->farm_id;
            //     $orderitem->farm_return_type_id = $farm_return_type_id;
            // }
            // else if($item->product_id){
            //     $orderitem->product_id = $item->product_id;
            // }

            $orderitem->save();
            $total=$total+$orderitem->amount;
         
        }
        $order->total_amount = $total;
        $order->save();

        return response()->json($order, 200);


        if(boolval($request->payment_through_wallet)){

            return redirect()->action('${App\Http\Controllers\WallectController@makePayment}', ['order' => $order]);
        }

        return redirect()->action('${App\Http\Controllers\FlutterController@makePayment}', ['order' => $order]);
    }
}
