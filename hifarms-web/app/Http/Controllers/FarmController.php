<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FarmController extends Controller
{   
    public function index(){

       $farms= Farm::where('user_id',Auth::user()->id)->get();
       return view('farm.index',['farms'=>$farms]);
    }

    public function show(Farm $farm){

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
}
