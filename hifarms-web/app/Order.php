<?php

namespace App;

use App\User;
use App\Cart_item;
use Faker\Provider\sl_SI\Payment;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){

        return $this->belongsTo(User::class);
    }
    public function payment(){

        return $this->hasOne(Payment::class);
    }
    public function orderItems(){

        return $this->hasMany(Cart_item::class);
    }
}
