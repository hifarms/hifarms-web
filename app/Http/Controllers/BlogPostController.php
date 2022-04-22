<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index(){
        return 'hello';
    }
    public function getpost($category=null){
        if($category !=null ){
            $posts= BlogPost::where("blog_category_id",$category)->get();
            return view('blog',['posts'=>$posts]);
        }
        $posts = BlogPost::all();

        return view('blog',['posts'=>$posts]);
    }

    public function show(Request $request,$slug){

        $post = BlogPost::where('slug',$slug)->firstOrFail();

        return view('blog-view',['post'=>$post]);
    }

    public function create(Request $request){

        return view('blog.create');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'content' => 'required|string',
            'image'  => 'mimes:jpg,png'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $post = new BlogPost();
        $post->title= $request->title();
        $post->content = $request->content;
        $post->slug= Str::slug($request->title).'-'.rand(1000);
      
        if ($request->hasFile('image'))
        {
            $file  = $request->file('image');
            $path = $file->store('/images/blog','public');
            $post->image_cover = 'storage/'.$path;
        }


        $post->save();
    }

    public function edit(Request $request,BlogPost $post){

        return view('blog.edit',['post'=>$post]);
    }

    public function update(Request $request,BlogPost $blog){

        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'content' => 'required|string',
            'image'  => 'mimes:jpg,png'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $post->title= $request->title();
        $post->content = $request->content;
      
        if ($request->hasFile('image'))
        {
            $file  = $request->file('image');
            $path = $file->store('/images/blog','public');
            $post->image_cover = 'storage/'.$path;
        }


        $post->save();
   
    }

    public function destroy(BlogPost $post){

        $tempurl = $post->image_url;
        $deleted =  $post->delete();
        if(!$deleted){
           return redirect()->back()->with(['error'=>'Delete Failed']);
        }
        File::delete($tempurl);
        return redirect()->back()->with(['Success'=>'Delete Success']);

    }
}
