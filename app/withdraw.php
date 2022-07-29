<?php

namespace App;

use App\withdrawStatus;
use Illuminate\Database\Eloquent\Model;

class withdraw extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function status(){
        return $this->belongsTo(withdrawStatus::class);

    }
}
