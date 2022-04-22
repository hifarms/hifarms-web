<?php

namespace App;

use App\Farm;
use Illuminate\Database\Eloquent\Model;

class Cart_item extends Model
{
    public function product(){

        return $this->hasOne(Product::class);
    }

    public function farm(){
        
        return $this->belongsTo(Farm::class);

    }
}
