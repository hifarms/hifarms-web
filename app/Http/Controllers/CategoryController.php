<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Category;
use App\label;

class CategoryController extends Controller
{   
    

    public function create(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect()->back()->with(['success_message'=>'Created Successfully']);

    }

    public function destroy(Category $category){

        $deleted=$category->delete();

        if(!$deleted){
            return redirect()->back()->with(['warning_message'=>'Delete Failed']);
        }

        return redirect()->back()->with(['success_message'=>'Delete Successfully']);

    }

    public function createlabel(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $label = new label();
        $label->name = $request->name;
        $label->save();

        return redirect()->back()->with(['success'=>'Created Successfully']);

    }
}
