<?php

namespace App;

use App\label;
use App\Farm_type;
use App\Order_item;
use App\Farm_return_type;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    public function farm_type(){

        return $this->belongsTo(Farm_type::class);
    }

    public function returns(){

        return $this->hasMany(Farm_return_type::class);
    }

    public function label(){
        
        return $this->belongsTo(label::class);
    }

    public function investments(){

        return $this->hasMany(Order_item::class);
    }

}
