<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Products;
use App\Reserve;
use App\Order;
use Session;
use Hash;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    
    public function home() {
        return view('user/home');
    }
    

    public function edit(Request $request, $id) {
        $user = User::findOrFail($id);
        return view('user/edit-info')->with('user',$user);
    }

    public function  infoupdate(Request $request, $id) {
        $validation = $request->validate(
        [
           'name'  => 'required|min:4',
           'email'  =>  'required|email',
           'password'  =>  'required|min:8',
           'conf-password'   =>  'required|same:password', 
            
        ]);
        $data = [
            'name'  => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            
        ];
        $update = User::find($id)->update($data);
        Session::flash('statuscode','success');
        return redirect('home/')->with('status','You successfully edited');
    }

    public function products() {
        $products = Products::all();
        return view('user/products')->with('products', $products);
    }

};