<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserve;
use App\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
class ReserveController extends Controller
{
    public function reserve() {
		return view('user.reserve.reserve-table');
	}

	public function teblereserve(Request $request) {
		 // $validation = $request->validate(
   //      [
   //         'name'         => 'required|min:4',
   //         'phone'        =>'required|min:4',
   //         'email'        =>'required|email',
   //         'data'         =>'required|date_format:Y-m-d',
   //         'start_time'   =>'required|date_format:H:i',
   //         'end_time'     =>'required|date_format:H:i',
   //         'table_number' =>'required',
   //         'type'         =>'required',

  // $date = Carbon::today()->subYear()->format('Y-m-d');
  // dd($date);


    $user = Auth::user();
       $data=[
        'user_id'       => $user->id,
         'name'         => $request->name,
         'phone'        => $request->phone,
         'email'        => $request->email,
         'date'         => Carbon::parse($request->date)->format('d/m/Y'),
         'start_time'   => $request->start_time,
         'end_time'     => $request->end_time,
         'people'       => $request->people,
         'table_number' => $request->table_number,
         'type'         => $request->type,
       ];


$insert = Reserve::where($request->id)->insert($data);
return redirect('home/cart');

	}


}
