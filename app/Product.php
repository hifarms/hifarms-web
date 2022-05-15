<?php

namespace App;

use App\Order_item;
use App\Product_type;
use App\Service_type;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function type(){

        return $this->belongsTo(Product_type::class);
    }

    public function serviceType(){

        return $this->hasOne(Service_type::class);
    }
    public function orders(){

        return $this->hasMany(Order_item::class);
    }
    
    public function label(){
        
        return $this->belongsTo(label::class);
    }
}
