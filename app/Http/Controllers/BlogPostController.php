<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

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
        $post->title = $request->input('title');
        $post->blog_category_id = $request->input('blog_category_id');
        $post->content = $request->input('content');
      
        if ($request->hasFile('image'))
        {
            $file  = $request->file('image');
            $path = $file->store('/images/blog','public');
            $post->image_cover = 'storage/'.$path;
        }

        $post->save();

        return redirect()->back()->with('Success_message', 'Blog Posted Successfully');
    }

    public function edit(Request $request,BlogPost $post){

        return view('blog.edit',['post'=>$post]);
    }

    public function update(Request $request){

        $validator = Validator::make($request->all(), [
            'id'=> 'required',
            'title' => 'required|string',
            'content' => 'required|string',
            'image'  => 'mimes:jpg,png'
        ]);

       
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $post = BlogPost::where('id',$request->id)->firstOrFail();
        $post->title= $request->title;
        $post->content = $request->content;
        $post->created_at = $request->date;
      
        if ($request->hasFile('image'))
        {
            $file  = $request->file('image');
            $path = $file->store('/images/blog','public');
            File::delete($post->image_cover);
            $post->image_cover = 'storage/'.$path;
        }


        $post->save();

        return redirect()->back()->with(['success_message'=>'Post Updated Successfully']);
    }


    public function destroy(BlogPost $post){

        $tempurl = $post->image_url;
        $deleted =  $post->delete();
        if(!$deleted){
           return redirect()->back()->with(['error'=>'Delete Failed']);
        }
        File::delete($tempurl);
        return redirect()->back()->with(['success_message'=>'Deleted Successfully']);

    }
}
