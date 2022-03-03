<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
   public function index(){

    $result = Product::where('category_id',$request->category)->get();

   }

   public function show(Product $product){
       
    return view('product.show',['product'=>$product]);

   }

   public function create(Request $request){

    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'price' => 'required',
        'unit' => 'required',
        'location' => 'required',
        'image'  => 'mimes:jpg,png'
    ]);

    if($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $product = new Product();
    $product->unit = $request->unit;
    $product->user_id = Auth::user()->id;
    $product->location = $request->location;
    $product->category = $request->category;
    $product->description= $request->description;
    $product->activated= 1;
    $request->product_type? $product->product_type_id = $request->product_type: null;
    $request->service_type? $product->product_type_id = $request->product_type: null;

    if ($request->hasFile('image'))
    {
        $file  = $request->file('image');
        $path = $file->store('/images/product','public');
        $product->image = 'storage/'.$path;
    }
    $product->save();

    return redirect()->back()->with('status', 'Product Created!');
    
   }

   public function edit(Request $request,Product $product){

    if($product->user_id != Auth::user()->id){
        return redirect()->back()->with('error', 'UnAuthorized to edit Product');
    }

    return view('product.edit',['product'=>$product]);
     
   }
   public function update(Request $request,Product $product){
       
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'price' => 'required',
        'unit' => 'required',
        'location' => 'required',
        'image'  => 'mimes:jpg,png'
    ]);
    if($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    
    if($product->user_id != Auth::user()->id){
        return redirect()->back()->with('error', 'UnAuthorized to Update Product');
    }

    $product->unit = $request->unit;
    $product->location = $request->location;
    $product->description= $request->description;
    if ($request->hasFile('image'))
    {
        $file  = $request->file('image');
        $path = $file->store('/images/product','public');
        File::delete($product->image);
        $product->image = 'storage/'.$path;
    }
    $product->save();
    return redirect()->back()->with('status', 'Product Created!');

   }

   public function destroy(Product $product){

    if($product->user_id != Auth::user()->id){
        return redirect()->back()->with('error', 'UnAuthorized to Delete Product');
    }
    // saving image url
    $tempurl=$product->image;
    //delete product
    $deleted = $product->delete();

    //check if delete is success
    if(!$delete){
        return redirect()->back()->with('error', 'Delete Failed');
    }

    File::delete($tempurl);
    return redirect()->back()->with('success', 'Delete Success');
   }
}
