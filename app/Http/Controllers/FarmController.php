<?php

namespace App\Http\Controllers;

use App\costInput;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            'farm_type_id' => 'required',
            'location' => 'required',
            'image'  => 'mimes:jpg,png'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $farm = new Farm();
        $farm->name = $request->name;
        $farm->ccategory_id = $request->category_id;
        $farm->location = $request->location;
        $farm->farm_type_id = $request->farm_type_id;
        
        if ($request->hasFile('image'))
        {
            $file  = $request->file('image');
            $path = $file->store('/images/farm','public');
            $farm->image = 'storage/'.$path;
        }
        
        $farm->save();

        return redirect()->back()->with(['success'=>'Farm created successfully']);

    }
    
    public function destroy(Farm $farm){

        $this->authorize('view', $farm);
        // saving image url
        $tempurl=$farm->image;
        //delete farm
        $deleted = $farm->delete();
    
        //check if delete is success
        if(!$delete){
            return redirect()->back()->with('error', 'Delete Failed');
        }
    
        File::delete($tempurl);
        return redirect()->back()->with('success', 'Delete Success');

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
