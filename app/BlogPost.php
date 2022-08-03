<?php

namespace App;

use App\Comment;
use App\blogCategory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class BlogPost extends Model
{
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
    public function comments(){

        return $this->hasMany(Comment::class);
    }

    public function blog_category(){

        return $this->belongsTo(blogCategory::class);
    // 
    }
}
