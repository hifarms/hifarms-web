<?php

namespace App\Http\Controllers;

use App\costInput;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Farm;

class FarmController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
 
    }

    public function index(){
    
       $farms= Farm::where('user_id',Auth::user()->id)->get();
       return view('farm.index',['farms'=>$farms]);
    }

    public function show(Farm $farm){
    
    //check if user is the Owner
    $this->authorize('view', $farm);

        return view('farm.view',['farm'=>$farm]);
    }

    public function create(Request $request){
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category_id' => 'required',
            'i_units' => 'required',
            'unit_price' => 'required',
            'location' => 'required',
            'image'  => 'mimes:jpg,png'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $farm = new Farm();
        $farm->name = $request->name;
        $farm->category_id = $request->category_id;
        $farm->location = $request->location;
        $farm->i_units = $request->i_units;
        $farm->c_units = $request->i_units;
        $farm->unit_price = $request->unit_price;
        $farm->active =true;
        $farm->description= $request->description || "Null";
        
        if ($request->hasFile('image'))
        {
            $file  = $request->file('image');
            $path = $file->store('/images/farm','public');
            $farm->image = 'storage/'.$path;
        }
        
        $farm->save();

        return redirect()->back()->with(['success_message'=>'Farm created successfully']);

    }
    
    public function destroy(Farm $farm){

        // saving image url
        $tempurl=$farm->image;
        //delete farm
        $deleted = $farm->delete();
    
        //check if delete is success
        if(!$deleted){
            return redirect()->back()->with('warning_message', 'Delete Failed');
        }
    
        File::delete($tempurl);
        return redirect()->back()->with('success_message', 'Delete Success');

       }

       public function update(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'i_units' => 'required',
            'unit_price' => 'required',
            'image'  => 'mimes:jpg,png'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

            $farm = Farm::where('id',$id)->firstOrFail();
            $farm->name = $request->name;
            if($request->category_id){
                $farm->category_id = $request->category_id;
            }
            if($request->location){
                $farm->location = $request->location;
            }
            $farm->i_units = $request->i_units;
            $farm->unit_price = $request->unit_price;
            
            if ($request->hasFile('image'))
            {
                $file  = $request->file('image');
                $path = $file->store('/images/farm','public');
                File::delete($farm->image);
                $farm->image = 'storage/'.$path;
            }
            
            $farm->save();

            return redirect()->back()->with(['success_message'=>'Farm Updated successfully']);
        }

       public function costBenefitProfit(Request $request){

            if($request->type=="1"){
            $chicks=costInput::where('cost_farm_id',$request->type)->where('variable_name','chicks')->first();
            $chickenProfit=0;
            $manureProfit=0;
            $numberchick=($chicks->percentage/100)*$request->amount/$chicks->unit_price;
            
            $chicken=costInput::where('cost_farm_id',$request->type)->where('variable_name','chickens')->first();
            $chickenProfit=$numberchick*$chicken->unit_price;

            $manure=costInput::where('cost_farm_id',$request->type)->where('variable_name','manure')->first();
            
            $manureProfit=(1/100)*$numberchick*$manure->unit_price;

            $profit=$chickenProfit+$manureProfit;
            $defet=(10/100)*$profit;
            $sales = $profit-$defet;
            $crossProfit=$sales-$request->amount;
            $netProfitdefect=(7.50/100)*$crossProfit;
            $netProfit = $crossProfit-$netProfitdefect;
            return response()->json(['net'=>$netProfit,'cross'=>$crossProfit,'sales'=>$sales], 200);
        }

       }
}
