<?php

namespace App;

use App\User;
use App\WalletTransaction;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    public function walletTransactions(){
        
        return $this->hasMany(WalletTransaction::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);

    }
}
