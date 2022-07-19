<?php

namespace App;

use App\Farm;
use App\Farm_return_type;
use Illuminate\Database\Eloquent\Model;

class order_item extends Model
{
    public function order(){

        return $this->belongsTo(Order::class);
    }
    public function farm(){

        return $this->belongsTo(Farm::class);
    }
    public function returntype(){

        return $this->belongsTo(Farm_return_type::class,'farm_return_type_id');
    }
}
