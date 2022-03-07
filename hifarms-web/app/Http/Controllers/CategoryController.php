<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{   
    

    public function create(){

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $category = new Category();
        $category->name = $request->name();
        $category->save();

        return redirect()->back()->with(['success'=>'Created Successfully']);

    }

    public function destroy(Category $category){

        $deleted=$category->delete();

        if(!$deleted){
            return redirect()->back()->with(['error'=>'Delete Failed']);
        }

        return redirect()->back()->with(['success'=>'Delete Successfully']);

    }
}
