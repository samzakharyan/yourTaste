<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
class IndexController extends Controller
{

   public function index()
   {
      $logo=Logo::first();
      if (!empty($logo)) {
        return view('user/index')->with('logo', $logo);
     }
     
     $logo['name'] = 'Your Teaste';
     $logo['type'] = 'text';
     $logo['call_name'] = 'Call Me';
     $logo['phone'] = '111111111';
     $logo['reserv_name'] = 'Reserve';
     return view('user/index')->with('logo', $logo);
  } 
}
