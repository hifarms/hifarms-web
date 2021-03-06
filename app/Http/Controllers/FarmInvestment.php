<?php

namespace App\Http\Controllers;

use App\Farm;
use App\Cart_item;
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
        return redirect()->back()-with(['status'=>'success']);
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
        
        return redirect()->back()->with(['success'=>'Farm Invesment Return added']);
    }

    // list of farms looking for investment
    public function index(Request $request){
        
            $sort = $request->input('sort')=="new"? "ASC" : "DESC";
            $products= Farm::where('active','=',1)->orderBy('created_at',$sort)->paginate(15)->withQueryString();

            session()->flashInput($request->input());

            if($request->input('range')){
                $products= $products->where('unit_price',"<",$request->input('range'));
            }

            $cat=[];
            if($request->input('livestock')){
                array_push($cat,1);
            }
            if($request->input('cattle')){
                array_push($cat,2);
            }
            if($request->input('crop')){
                array_push($cat,3);
            }
            if($request->input('poultry')){
                array_push($cat,4);
            }
            // $category= explode(',',$request->input('category'))

            $cat && $products=$products->whereIn('category_id',$cat);
            //$price = explode('-',$request->input('price)//
            // $products = Farm::where('active','=',1)->where('category_id',$rquest->input('category'))->get();        }

        return view('sponsor',['products'=>$products]);
    }

    //farmInvesment detail page
    public function show(Request $request,Farm $farm){
        $tempid = $request->cookie('carts');
        $added_to_cart =  Cart_item::where('temp_id',$tempid)->where('farm_id',$farm->id)->first();
        return view('product-show',['farm'=>$farm,"added_to_cart"=>boolval($added_to_cart)]);
    }



    public function farmInvest(Request $request){
        
            $sort = $request->input('sort')=="new"? "ASC" : "DESC";
            $products= Farm::where('active','=',1)->orderBy('created_at',$sort)->paginate(15)->withQueryString();

            session()->flashInput($request->input());

            if($request->input('range')){
                $products= $products->where('unit_price',"<",$request->input('range'));
            }

            $cat=[];
            if($request->input('livestock')){
                array_push($cat,1);
            }
            if($request->input('cattle')){
                array_push($cat,2);
            }
            if($request->input('crop')){
                array_push($cat,3);
            }
            if($request->input('poultry')){
                array_push($cat,4);
            }
            // $category= explode(',',$request->input('category'))

            $cat && $products=$products->whereIn('category_id',$cat);
            //$price = explode('-',$request->input('price)//
            // $products = Farm::where('active','=',1)->where('category_id',$rquest->input('category'))->get();        }

        return view('invest',['products'=>$products]);
    
    }
}