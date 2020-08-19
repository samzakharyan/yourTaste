<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response;
// use Stripe;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use App\Reserve;
use App\User;
use App\Order;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    public function cart(){
    	$user = Auth::user();
    	$UserReserve = Reserve::where('user_id',$user->id)->where('payed', 0)->get(); 
    	return view('user.cart.cart')->with('UserReserve', $UserReserve);
    }
// https://codinginfinite.com/laravel-6-stripe-payment-integration-tutorial/
    public function store(Request $request)
        {           
                    $user = Auth::user();
                    $reserve = Reserve::where('user_id',$user->id)->where('payed', 0)->get();
                    foreach ($reserve as $res){
                        $number=$res->table_number;
                     }
               if(  
                    $stripe = Stripe::charges()->create([
                    'source' => $request->get('tokenId'),
                    'currency' => 'USD',
                    'amount' => $request->get('amount'),
                    'description' => $number,
                    ])    
                    ){

                     foreach ($reserve as $res){

                        $order=new Order;
                        $order->user_id=$user->id;
                        $order->reserve_id=$res->id;
                        $order->save();
                     }
               }
               $reserve = Reserve::where('user_id',$user->id)->update(["payed"=>1]);
       } 
}
