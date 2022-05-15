<?php

namespace App;

use App\User;
use App\Payment;
use App\Cart_item;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){

        return $this->belongsTo(User::class);
    }
    public function payment(){

        return $this->belongsTo(Payment::class);
    }
    public function orderitems(){

        return $this->hasMany(Cart_item::class);
    }
}
