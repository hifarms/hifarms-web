<?php

namespace App;

use App\Farm;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Cart_item extends Model
{
    public function product(){

        return $this->belongsTo(Product::class);
    }

    public function farm(){
        
        return $this->belongsTo(Farm::class);

    }
}
