<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class service_type extends Model
{
    public function products(){

        return $this->hasMany(Product::class);
    }
}
