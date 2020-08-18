<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Order;
use App\Reserve;
use Carbon\Carbon;
use DB;
class OrderController extends Controller
{
  public function reservelist($id) {
    $user=User::findOrFail($id);
    $order = Order::where('user_id',$user->id)->with('reserve')->get();     
    return view('user.reserve.reserve-list')->with('user', $user)->with('order', $order);
  }

    public function  cancle(Request $request, $id) {
   
    if ($request->reason == 'check') {
      if (Order::where('reserve_id',$id)) {
        return response()->json(['msg' => 'You are want to cancle this reservation']);
      } 
     }
    else if ($request->reason == 'cancle') {
      $cancle = Order::where(['reserve_id' => $id])->delete();
      $delete = Reserve::where(['id' => $id])->delete();
      return $cancle ? response()->json(['fail' => false, 'msg' => 'You are successfully canceled  this reservation.']) : 
      response()->json(['fail' => true, 'msg' => 'Something went wrong. Please try again.']); 
    }
  }


  //   public function adminreserve() {
  //   $user=User::all();
  //   $order = Order::where('user_id',$user->all())->with('reserve')->get();            
  //   return view('admin.reserve.reserve')->with('user', $user)->with('order', $order);
  // }
}
