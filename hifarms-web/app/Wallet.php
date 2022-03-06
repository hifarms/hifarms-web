<?php

namespace App;

use App\WalletTransaction;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    public function walletTransactions(){
        
        return $this->hasMany(WalletTransaction::class);
    }
    
}
