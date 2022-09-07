<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Farm;
use App\User;
use App\Order;
use App\Message;
use App\Product;
use App\Order_item;
use App\Farm_return_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth');
    }

   public function dashboard(){
    $product = count(Product::all());
    $farms = count(Farm::where('user_id',auth()->user()->id)->get());
    $orders = Order::where('user_id',auth()->user()->id)->get();
    $active=0;
    foreach($orders as $order){
        // if($order->payment->status_code !== 200 || $order->payment->status_message !== 'success'){
        //     continue;
        // }
        $active=$active+count($order->orderitems->where('delivered',0));
    }
    return view('dashboard',['product'=>$product,'farm'=>$farms,'active'=>$active]);

   }

   public function farmIndex(Request $request){
       $farms = Farm::where('user_id',auth()->user()->id)->get();
       $livestokeCount = 0;
       $cropCount = 0;
       foreach($farms as $farm){
           if($farm->farm_type->name == 'Livestock'){
               $livestokeCount++;
               continue;
           }
           $cropCount++;
       }

       return view('livestock',['livestock'=>$livestokeCount,'crop'=>$cropCount]);
   }


    //Userdasboard/investment PAGE
    public function investment(Request $request){

        $user = auth()->user();
        $total_return=0;
        $active=0;
        $total_invest=0;
        $active_invest=$user->investments;
        foreach($active_invest as $invest){
            
            if($invest->order->payment==null || boolval($invest->product_id) || $invest->order->payment->status_code==201 || boolval($invest->delivered) || boolval($invest->cleared_to_wallet) ){
                continue;
            }
            $per = Farm_return_type::where('id',$invest->farm_return_type_id)->first();
            $rtn=($per->percentage/100)*$invest->amount;
            $total_invest=$total_invest+$invest->amount;
            $total_return=$total_return+$rtn;
            $active++;
        }
        return view('invest-returns',['user'=>$user,'total_invest'=>$total_invest,'total_return'=>$total_return,'active'=>$active]);

   }

   public function Profile(){
    $user = auth()->user();
       return view('profile',['user'=>$user,]);
   }

   public function getBank(Request $request,$id){
    
        $user = Bank::where('user_id',$id)->first();

        return response()->json(['data'=>$user], 200);
   }

   public function settings(){

        $user = auth()->user();
        $messages = Message::where('recipient_id',$user->id)->orderBy('created_at','DESC')->get();
        $totalProduct = Product::where('user_id',$user->id)->where('active',1)->count();
        $userProduct = Product::where('user_id',$user->id)->where('active',1)->pluck('id');
        $totalProductB = 0;
        $active=0;
        $totalSales = 0;
        $active_invest=$user->investments;
        foreach($active_invest as $invest){

            //check if payment is success and not null
            if($invest->order->payment==null || $invest->order->payment->status_code==201 ){
                continue;
            }
            if($invest->product_id){
                $totalProductB = $totalProductB + $invest->unit;
                continue;
            }
            if(boolval($invest->delivered) || boolval($invest->cleared_to_wallet)){
                continue;
            }
            $active++;
        }

        $items = Order_item::whereIn('product_id',$userProduct)->get();
        foreach($items as $item){

            //check if payment is success and not null
            if($item->order->payment==null || $item->order->payment->status_code==201 ){
                continue;
            }
            $totalSales++;
        }


       return view('userSettings',['messages'=>$messages,'productB'=>$totalProductB,'totalS'=>$totalSales,'active'=>$active,'totalP'=>$totalProduct]);
   }

   public function changePassword(Request $request){
   // Validation
   $this->validate($request, [
    
    'old' => 'required',
    'new' => 'required',
    ]);

    $user = Auth::user();
    if(!Hash::check($request->old, $user->password)){
      return response()->json(['error'=>'Password doesn\'t match'], 401);
    }
    $new =Hash::make($request->new);
    $user->password = $new;
    $user->save();
    return response()->json(['success'=>'Password changed succesfully'], 200);
}
   public function updateProfile(Request $request){
       
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string',
            'occupation' => 'required|string',
            'contact' => 'required|string',
            'gender' => 'required|string',
            'address' => 'required|string',
            'state' => 'required|string',
            'acc_name' => 'required|string',
            'bank_name' => 'required|string',
            'acc_no' => 'required|numeric',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

       $user = auth()->user();
       $user->fullname = $request->fullname;
       $user->occupation = $request->occupation;
       $user->phone = $request->contact;
       $user->gender = $request->gender;
       $user->address = $request->address;
       $user->state = $request->state;
       $userbank = $user->bank;
       $userbank->bank_acc_name = $request->acc_name;
       $userbank->bank_name = $request->bank_name;
       $userbank->bank_acc_no =$request->acc_no;
       $userbank->save();
       $user->save();
       return redirect()->back()->with(['success_message'=>'Updated Successfully']);
   }

     //Userdasboard/Maketpalace/orders PAGE
    public function viewOrders(Request $request){

        $user = User::with(['orders'=>function($query){

            $query->where('product_id','!=',null)->get();

        }])->where('user_id','=',Auth::user()->id)->get();

        return view('userdashboard.orders',['$user'=>$user]);
   }

    //Userdasboard/wallect PAGE
   public function wallet(Request $request){

        $user = Auth::user();

        $totalspend=0;
        $investments =$user->investments;

        foreach($investments as $investment){
        if($investment->order->payment && $investment->order->payment->status_code==200){
                $totalspend+=$investment->amount;
            }
         }
         
         $investments =$user->investments();
         if($request->input('search')){
            session()->flashInput($request->input());
          $investments = $investments->where('order_items.id',$request->input('search'));
         }
         $investments = $investments->get();
        return view('wallet',['user'=>$user,'totalspend'=>$totalspend,'investments'=>$investments]);
    }

//Moving Farm investment Return/payment to wallet
    public function moveToWallet(Request $request,Order_item $item){
        
        $this->authorize('view', $item);

        if($item->cleared_to_wallet && $item->delivered){

            redirect()->back()->with(['error'=>'Sorry cant move the fund to Wallet']);
        }
        $userWallet= Auth::user()->wallet()->id;

        $newTransaction = new WalletTransaction();
        $newTransaction->wallet_id = $userWallet->id;
        $newTransaction->transaction_type= 1; // Deposit;
        $newTransaction->transaction_status= 1; // Success;
        $newTransaction->amount = $item->amount;
        $newTransaction->amount_before = $userWallet->current_balance;
        $userWallet->current_balance = $item->amount + $userWallet->current_balance;
        $wallet->save();
        $newTransaction->amount_after =$userWallet->current_balance;
        $newTransaction->description = 'Move Farm investment to Wallet Of itemID '.$item->id;
        $newTransaction->save();

        if(!$newTransaction){
            $newTransaction->transaction_status= 2; // Failed;
            $newTransaction->save();
            redirect()->back()->with(['error'=>'Sorry Operation Failed Try Again Later']);
        }
        
        $item->cleared_to_wallet = 1; // Moved
        $item->save();
        redirect()->back()->with(['success'=>'Fund Moved to Wallet']);

    }

    //Moving Product/service payment to wallet
    public function ProductDelivered(Request $request,Order_item $item) {

        $this->authorize('itemOwner', $item);

        if($item->cleared_to_wallet && $item->delivered && !$item->order()->payment()->status_code = 200){

            redirect()->back()->with(['error'=>'Sorry cant move the fund to Wallet']);
        }
        //Product Owner Wallet
        $userWallet= $item->product()->user()->wallet()->id;

        $newTransaction = new WalletTransaction();
        $newTransaction->wallet_id = $userWallet->id;
        $newTransaction->transaction_type= 1; // Deposit;
        $newTransaction->transaction_status= 1; // Success;
        $newTransaction->amount = $item->amount;
        $newTransaction->amount_before = $userWallet->current_balance;
        $userWallet->current_balance = $item->amount + $userWallet->current_balance;
        $userWallet->save();
        $newTransaction->amount_after =  $userWallet->current_balance;
        $newTransaction->description = 'Received Product/service Payment to Wallet id '.$item->id;
        $newTransaction->save();

        if(!$newTransaction){
            $newTransaction->transaction_status= 2; // Failed;
            $newTransaction->save();
            redirect()->back()->with(['error'=>'Sorry Operation Failed Try Again Later']);
        }
        $item->delivered = 1; //Marked as Delivered
        $item->cleared_to_wallet = 1; // Moved
        $item->save();
        redirect()->back()->with(['success'=>'Fund Moved to Wallet']);

    }


    public function changeProfilePic(Request $request){

    $validator =  $this->validate($request, [
        'image'  => 'mimes:jpg,png,jpeg'
    ]);

    if ($request->hasFile('image'))
        {
            $user = Auth::user();
            $file  = $request->file('image');
            $path = $file->store('/images/user','public');
            $user->avatar!='img/Profile.png' && File::delete($user->avatar);
            $user->avatar = 'storage/'.$path;
            $user->save();
            return response()->json(['success'=>'Profile  Updated successfully'], 200);
        }
    }

   public function getMessage(){

  
   if(auth()->user()->isAdmin()){
    $messages =Message::where('recipient_id',0)->orderBy('created_at','DESC')->paginate(7);
   }
   else{
    $messages= Message::where('recipient_id',auth()->user()->id)->orderBy('created_at','DESC')->paginate(7);
   }
   return response()->json(['messages'=>$messages], 200);
 }

    public function activateUser(Request $request,$id){
        $user = User::where('id',$id)->firstOrFail();
        
        if($user->status){
            $user->status = 0;
            $user->save();
            return redirect()->back()->with(['success_message'=>'User DeActivated']);
        }
        $user->status = 1;
        $user->save();
        return redirect()->back()->with(['success_message'=>'User Activation is successfully']);

    }
}