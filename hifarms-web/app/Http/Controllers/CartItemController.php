<?php

namespace App\Http\Controllers;

use App\Cart_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartItemController extends Controller
{   
  
    public function getCart(){

        //get temp_id from cookie
        $tempid =  $request->cookie('carts');
        if(!Auth::check()){

            $cartItems=Cart_item::with('product')->where('temp_id',$tempid)->get();
            return view('cart',['carts'=>$cartItems]);
        }
        $cartItems=Cart_item::with('product')->where('temp_id',$tempid)-orWhere('user_id',Auth::user()->id)->get();
        return view('cart',['carts'=>$cartItems]);
    }
    
    public function addCart(Request $request,$type){

        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'unit' => 'required',
            'amount' => 'required',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $tempid = $request->cookie('cart');
        if(!$tempid){

            // generating ramdom Str
            $tempid= Str::random(20);

            $cookie = cookie('carts',$tempid, 60*30);
        }

        //check if cart item is already in cart
        $Item=Cart_item::where('product_id',$request->product_id)->where('temp_id',$tempid)->first();
        if($Items){
            return redirect()->back()->with(['error'=>'Item is already in the cart']);
        }

        // add market place products to cart 
        if($type=='product'){

                $cart = new Cart_item();
                $cart->product_id= $request->product_id;
                $cart->unit = $request->unit;
                $cart->price = $request->amount;
                Auth::check() && $cart->user_id = Auth::user()->id;
                $cart->temp_id = $tempid;
                $cart->save();
                // storing temp id in cookies

                return response()->json($cart, 200)->cookie($cookie);
        }
        
        // adding Farm investments to cart
        else if($type=='invesment'){

                $cart = new Cart_item();
                $cart->farm_id= $request->farm_id;
                $cart->unit = $request->unit;
                $cart->price = $request->amount;
                $cart->farm_return_type = $request->farm_return_type;
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

        if($request->unit > $cartitem->unit || $cartitem->unit==0){

            return redirect()->back()->with(['error'=>'Out of Stock']);

        }

        $cartitem->unit = $request->unit;
        $cartitem->save();
        return redirect()->back()->with(['success'=>'Cart-updated']);
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
            return response()->json(['success'=>'failed'], 400);
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
