<?php

namespace App;

use App\Comment;
use App\blogCategory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    public function comments(){

        return $this->hasMany(Comment::class);
    }

    public function blog_category(){

        return $this->belongsTo(blogCategory::class);
    // 
    }
}
