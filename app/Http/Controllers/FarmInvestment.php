<?php

namespace App\Http\Controllers;

use App\Farm;
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
    
        $sort=$request->input('category')==null? "all" : $request->input('category');
        if($sort=='all'){
            $result = Farm::where('active','=',1)->get();
        }
        else{
            //$category= explode(',',$request->input('category'))
            //$price = explode('-',$request->input('price)
            $result = Farm::where('active','=',1)->where('category_id',$rquest->input('category'))->get();
        }

        return view('sponsor',['products'=>$result]);
    }

    //farmInvesment detail page
    public function show(Request $request,Farm $farm){

        return view('product-show',['farm'=>$farm]);
    }
}
