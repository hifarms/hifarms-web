<?php

namespace App;

use App\Bank;
use App\Role;
use App\Order;
use App\Wallet;
use App\Message;
use App\Cart_item;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
   
    public function carts(){

        return $this->hasMany(Cart_item::class);
    }

    public function messages(){

        return $this->hasMany(Message::class);
    }

    public function bank(){

        return $this->belongsTo(Bank::class);
    }

    public function role(){

        return $this->hasOne(Role::class);
    }

    public function orders(){

        return $this->hasMany(Order::class);
    }

    public function investments(){

        return $this->hasManyThrough('App\Order_item', 'App\Order', 'user_id', 'order_id','id','id');
    }

    public function wallet(){

        return $this->belongsTo(Wallet::class);
    }

    public function message()
    {
        return $this->hasMany('App\Message');
    }
    
    public function isAdmin(){

        return $this->role_id===1;
        
    }

    public function isUser(){

        return $this->role_id===2;
        
    }
}
