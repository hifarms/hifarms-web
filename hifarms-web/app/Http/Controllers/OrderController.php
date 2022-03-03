<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout(){

        $validator = Validator::make($request->all(), [
            'address' => 'required',
            'mobile' => 'required',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $order = new Order();
        $order->total_amout =  $request->total;
        $order->address = $request->address;
        $order->mobile_number = $request->mobile;
        $order->user_id = Auth::user()->id;
        $order->save();

        //
        $cartitems = Cart_item::where('temp_id',$tempid)->get();
        foreach($cartitems as $item){
            $orderitem = new Order_item();
            $orderitem->order_id = $order->id;
            //
            $orderitem->cleared_to_wallet = 0;
            $orderitem->delivered = 0;
            if($item->farm_id){
                $orderitem->farm_id = $item->farm_id;
                $orderitem->farm_return_type_id = $farm_return_type_id;
            }
            else if($item->product_id){
                $orderitem->product_id = $item->product_id;
            }

            $orderitem->save();
         
        }
    }
}
