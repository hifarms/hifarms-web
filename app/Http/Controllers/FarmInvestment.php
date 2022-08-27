<?php

namespace App\Http\Controllers;

use App\Farm;
use App\Product;
use App\Category;
use App\Cart_item;
use App\Order_item;
use App\Product_type;
use App\Farm_return_type;
use Illuminate\Http\Request;

class FarmInvestment extends Controller
{    
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
 
    }

     //activate farm to look for invest
     public function seekInvesment(Request $request,Farm $farm){

        $this->authorize('view', $farm);

        $validator = Validator::make($request->all(), [
            'unit' => 'required',
            'unit_price' => 'required',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $farm->i_unit = $request->unit;
        $farm->c_unit = $request->unit;
        $farm->unit_price= $request->price;
        //activate farm for selling after verification->will be moved to admin
        $farm->activated = 1;
        $farm->save();
        
        //
        return redirect()->back()-with(['success_message'=>'success']);
    }
    

    public function addReturn(Request $request,Farm $farm) {

        $this->authorize('view', $farm);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'duration' => 'required',
            'percentage' => 'required',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $return = new Farm_return_type();
        $return->name = $request->name;
        $return->duration = $request->duration;
        $return->percentage = $request->percentage;
        $return->farm_id = $farm->id;
        $return->save();
        
        return redirect()->back()->with(['success_message'=>'Farm Invesment Return added']);
    }

    // list of farms looking for investment
    public function index(Request $request){

        $sort = $request->input('sort')=="new"? "ASC" : "DESC";

        $products= Product::where('active','=',1)->orderBy('created_at',$sort);

        session()->flashInput($request->input());

        if($request->input('range')){
            $products= $products->where('unit_price',"<",$request->input('range'));
        }

        if($request->input('category')){
            $products= $products->whereIn('category_id',$request->input('category'));
        }
        $products= $products->paginate(50)->withQueryString();

        $product_type=Product_type::all();
        $category = Category::all();

        return view('sponsor',['products'=>$products,'productType'=>$product_type,'category'=>$category]);

    }

    //farmInvesment detail page
    public function show(Request $request,Farm $farm){
        $tempid = $request->cookie('carts');
        $added_to_cart =  Cart_item::where('temp_id',$tempid)->where('farm_id',$farm->id)->first();
        return view('product-show',['farm'=>$farm,"added_to_cart"=>boolval($added_to_cart)]);
    }

    public function release(Request $request){
        
        Order_item::where(['farm_id'=>$request->id,'farm_return_type_id'=>$request->type])
        ->update(array('delivered' => true ));

        return redirect()->back()->with(['success_message'=>"Fund Released"]);
    }



    public function farmInvest(Request $request){
        
            $sort = $request->input('sort')=="new"? "ASC" : "DESC";
            $products= Farm::where('active','=',1)->orderBy('created_at',$sort);

            session()->flashInput($request->input());

            if($request->input('range')){
                $products= $products->where('unit_price',"<",$request->input('range'));
            }

            if($request->input('category')){
                $products= $products->whereIn('category_id',$request->input('category'));
            }
            $products= $products->paginate(50)->withQueryString();
            $return = Farm_return_type::first();
            $category = Category::all();
        return view('invest',['products'=>$products,'return'=>$return,'category'=>$category]);
    
    }
}