<?php

namespace App\Http\Controllers;

use App\Message;
use App\Product;
use App\Category;
use App\Product_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{  
    public function __construct(){

        $this->middleware('auth')->except(['index','show']);
    }

    public function marketplace(Request $request){

        $sort = $request->input('sort')=="new"? "DESC" : "ASC";

        $products= Product::where('active','=',1)->orderBy('created_at',$sort);

        session()->flashInput($request->input());

        if($request->input('range')){
            $products= $products->where('price',"<",$request->input('range'));
        }

        if($request->input('category')){
            $products= $products->whereIn('category_id',$request->input('category'));
        }

        $products= $products->paginate(50)->withQueryString();
        $product_type=Product_type::all();
        $category = Category::all();

    return view('marketplace',['products'=>$products,'productType'=>$product_type,'category'=>$category]);


   }
    // public function OrderProduct(Request $request){
    //     $request->
    // }

    public function show(Product $product){
       
        return view('product-single',['product'=>$product]);

   }
   public function create(){

        // $product_type= DB::table('product_type')->get();
        $service_type= DB::table('service_type')->get();
        return view('product.create',['product_type'=>$product_type,'service_type'=>$service_type]);
   }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'price' => 'required|numeric|min:100|Max:50000',
            'unit' => 'required|numeric|min:1',
            'location' => 'required|string',
            'category_id'=>'required|numeric',
            'image'  => 'mimes:jpg,png,jpeg'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $product = new Product();
        $product->name = $request->name;
        $product->user_id = Auth::user()->id;
        $product->location = $request->location;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->unit = $request->unit;
        $product->description= $request->description || "Null";
        $product->active= 0;
        if(auth()->user()->isAdmin()){
            $product->active= 1;
        }
        $product->label_id = 1;
        $request->product_type? $product->product_type_id = $request->product_type: null;
        if ($request->hasFile('image')){
            $file  = $request->file('image');
            $path = $file->store('/images/product','public');
            $product->image = 'storage/'.$path;
        }
        $product->save();
        $message = auth()->user()->isAdmin()? "Product Created!" : "Product Created-Wait for Approval";
        return redirect()->back()->with(['success_message'=>$message]);
    
   }

    public function activate(Request $request,$id){

        $product = Product::where('id',$id)->firstOrFail();

        if($product->active){
            $product->active = false;
            $message = 'DeActivation Successfully';
        }
        else{
            $product->active = true;
            $message = 'Activation Successfully';
            $messages = new Message();
            $messages->sender_id = 0;
            $messages->recipient_id =$product->user_id;
            $messages->message_body = "Your Product ID-".$product->id."Is Activated";
            $messages->save();
        }

        $product->save();

        return redirect()->back()->with(['success_message'=>$message]);

   }
    public function update(Request $request,$id){
        
        

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'price' => 'required|numeric|min:100',
            'unit' => 'required|numeric|min:1',
            'image'  => 'mimes:jpg,png'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $product = Product::where('id',$id)->firstOrFail();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->unit = $request->unit;
        if($request->category_id){
            $product->category_id = $request->category_id;
        }
        if($request->location){
            $product->location = $request->location;
        }
        if ($request->hasFile('image'))
        {
            $file  = $request->file('image');
            $path = $file->store('/images/product','public');
            File::delete($product->image);
            $product->image = 'storage/'.$path;
        }
        $product->save();
        return redirect()->back()->with('success_message', 'Product Updated Success!');

   }
    public function destroy(Product $product){


        // saving image url
        $tempurl=$product->image;
        
        //delete product
        $deleted = $product->delete();

        //check if delete is success
        if(!$deleted){
            return redirect()->back()->with('warning_message', 'Delete Failed');
        }

        File::delete($tempurl);
        return redirect()->back()->with('success_message', 'Product Deleted Successfully');
    }
}
