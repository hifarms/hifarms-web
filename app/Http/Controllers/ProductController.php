<?php

namespace App\Http\Controllers;

use App\Product;
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
        $sort = $request->input('sort')=="new"? "ASC" : "DESC";

        $products= Product::where('active','=',1)->orderBy('created_at',$sort)->paginate(15)->withQueryString();

        session()->flashInput($request->input());

        if($request->input('range')){
            $products= $products->where('price',"<",$request->input('range'));
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

        $product_type=Product_type::all();

    return view('marketplace',['products'=>$products,'productType'=>$product_type]);


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

        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'price' => 'required',
        //     'unit' => 'required',
        //     'location' => 'required',
        //     'image'  => 'mimes:jpg,png'
        // ]);

        // if($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        $product = new Product();
        $product->name = $request->name;
        $product->unit = $request->unit;
        $product->user_id = Auth::user()->id;
        $product->location = $request->location;
        // $product->category_id = $request->category;
        $product->price = $request->price;
        $product->unit = $request->unit;
        $product->description= $request->description || "Null";
        $product->active= 1;
        $product->label_id= 1;
        $request->product_type? $product->product_type_id = $request->product_type: null;
        if ($request->hasFile('image')){
            $file  = $request->file('image');
            $path = $file->store('/images/product','public');
            $product->image = 'storage/'.$path;
        }
        $product->save();

        return redirect()->back()->with('status', 'Product Created!');
    
   }

    public function edit(Request $request,Product $product){

        $this->authorize('view', $product);

        return view('product.edit',['product'=>$product]);

   }
    public function update(Request $request,Product $product){
        
        $this->authorize('view', $product);

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

        $this->authorize('view', $product);

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
