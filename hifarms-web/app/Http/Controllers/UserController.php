<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Userdasboard/investment PAGE
    public function viewInvestment(){

        $user = User::with(['investments'=>function($query){
            $query->where('farm_id','!=',null)->get();
        }])->get();
        return view('userdashboard.investment',['$user'=>$user]);

   }

     //Userdasboard/Maketpalace/orders PAGE
    public function viewOrders(){

        $user = User::with(['orders'=>function($query){
            $query->where('product_id','!=',null)->get();
        }])->get();
        return view('userdashboard.orders',['$user'=>$user]);
   }

}
