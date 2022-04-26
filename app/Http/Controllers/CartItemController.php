<?php

namespace App\Http\Controllers;

use App\Farm;
use App\Cart_item;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartItemController extends Controller
{   
    public function cartNum(Request $request){
        //get temp_id from cookie
        $tempid =  $request->cookie('carts');
        $number = 0;
        if($request->json()){
            $datas=Cart_item::where('temp_id',$tempid)->get();
            foreach($datas as $data){
                $number=$number + $data->unit;
            }
            return response()->json(['cartNumber'=>$number], 200);
        }
    }
    public function getCart(Request $request){

        //get temp_id from cookie
        $tempid =  $request->cookie('carts');
      
        //market place cart
        $martCartItems=Cart_item::where('temp_id',$tempid)->orWhere('user_id','==',1)->get();

        //farm investment cart
        $farmCartItems=Cart_item::where('temp_id',$tempid)->orWhere('user_id','==',1)->get();

        return view('cart',['mart'=>$martCartItems,'farms'=>$farmCartItems]);
    }

    
    public function addCart(Request $request,$type){

        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'unit' => 'required',
            
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $tempid = $request->cookie('carts');
        $cookie = cookie('carts',$tempid, 60*300);
        if(!$tempid){

            // generating ramdom Str
            $tempid= Str::random(20);

            $cookie = cookie('carts',$tempid, 60*300);
        }

        //check if cart item is already in cart
        $Item=Cart_item::where('product_id',$request->id)->where('temp_id',$tempid)->first();
        if($Item){
            return response()->json(['error'=>'Item is already in the cart'],401);
        }

        $Item=Cart_item::where('farm_id',$request->id)->where('temp_id',$tempid)->first();
        if($Item){
            return response()->json(['error'=>'Item is already in the cart'],401);
        }

        // add market place products to cart 
        if($type=='product'){

                $cart = new Cart_item();
                $cart->product_id= $request->id;
                $cart->unit = $request->unit;
                $cart->price = $request->amount;
                Auth::check() && $cart->user_id = Auth::user()->id;
                $cart->temp_id = $tempid;
                $cart->save();
                // storing temp id in cookies

                return response()->json($cart, 200)->cookie($cookie);
        }
        
        // adding Farm investments to cart
        else if($type=='investment'){
               $farm= Farm::where('id',$request->id)->firstOrFail();
                $cart = new Cart_item();
                $cart->farm_id= $request->id;
                $cart->unit = $request->unit;
                $cart->price = $request->unit * $farm->unit_price;
                $cart->farm_return_type_id = 1;
                Auth::check() && $cart->user_id = Auth::user()->id;
                $cart->temp_id = $tempid;
                $cart->save();

                return response()->json($cart, 201)->cookie($cookie);
        }
        else{
                abort(404);
            }
      
    }

    public function update(Request $request,Cart_item $cartitem){

        if($request->unit > $cartitem->farm->i_units){

            return response()->json(['error'=>'Unit Not Available'],400);
        }

        $cartitem->unit = intval($request->unit);
        $cartitem->save();
        return response()->json(['success'=>'Item updated'],200);

    }

    // clear cart 
    public function clear(Request $request){

        $tempid =  $request->cookie('carts');
        $cartItems = Cart_item::where('temp_id',$tempid)->get();
        if(!$cartItems){
            return response()->json(['error'=>'Nothing to delete'], 400);
        }
        $check = $cartItems->delete();

        if(!$check) {
            return response()->json(['error'=>'failed'], 400);
        }
        
        return response()->json(['success'=>'Cleared success'], 204);
        
    }
    public function destroy(Request $request,Cart_item $cartitem){

        $delete=$cartitem->delete();
        
        if(!$delete){
            return response()->json(['error'=>'delete failed'], 400);
        }
        return response()->json(['success'=>'delete success'], 200);
        
    }

}
