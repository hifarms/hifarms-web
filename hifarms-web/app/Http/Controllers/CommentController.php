<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request){

        $comment = new Comment();
        $comment->content = $request->content;
        $comment->user_id = Auth::user()->id;
        $comment->blog_post_id = $request->post_id;

        $comment->save();

        return redirect()->back()->with(['success'=>'Comment success']);

    }

    public function destroy(Comment $comment){

        $deleted=$comment->delete();

        if(!$deleted){
            return redirect()->back()->with(['error'=>'Delete Failed']);
        }

        return redirect()->back()->with(['success'=>'Delete Successfully']);

    }
}
