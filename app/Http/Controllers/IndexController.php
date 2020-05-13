<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
class IndexController extends Controller
{


     public function index(Request $request)
     {   $logo=Logo::where($request->id)->first();
         return view('user/index')->with('logo', $logo);
    } 
}
