<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;
class IndexController extends Controller{

       public function index() {
             $logo=Logo::first();

             if (!empty($logo)) {
               return view('user.index')->with('logo', $logo);
             }
             $logo['name']        = 'Laravel-Cloud';
             $logo['type']        = 'text';
             $logo['call_name']   = 'Laravel-Cloud';
             $logo['phone']       = '111111111';
             $logo['reserv_name'] = 'Laravel-Cloud';
             $logo['name']        = 'Laravel-Cloud';
             $logo['column']      = 'Laravel-Cloud';
             $logo['favicon']     = 'logo.png';
             return view('user.index')->with('logo', $logo);
    
        } 
  }
