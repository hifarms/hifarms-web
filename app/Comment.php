<?php

namespace App;

use App\User;
use App\BlogPost;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post(){

        return $this->belongsTo(BlogPost::class);
    }

    public function user(){
        
        return $this->belongsTo(User::class);
    }

}
