<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer;
use App\Http\Requests\FooterRequest;
class FooterController extends Controller
{
	public function footer() {
		$footer = Footer::first();
		return view('admin.pages-edit.footer')->with('footer', $footer); 	
	}

     public function footerUpdate(FooterRequest $request) {
    	$footer = Footer::where($request->id)->first();
    	$data = array();
        $validated = $request->validated();
				if ($request->file('image_footer')) {
		        	$file     = $request->file('image_footer');
		        	$data['image_footer']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['image_footer']);
		        }
    
				if ($request->file('icon_1')) {
		        	$file     = $request->file('icon_1');
		        	$data['icon_1']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['icon_1']);
		        }

		        if ($request->file('icon_2')) {
		        	$file     = $request->file('icon_2');
		        	$data['icon_2']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['icon_2']);
		        }

		        if ($request->file('icon_3')) {
		        	$file     = $request->file('icon_3');
		        	$data['icon_3']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['icon_3']);
		        }

		        if ($request->file('icon_4')) {
		        	$file     = $request->file('icon_4');
		        	$data['icon_4']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['icon_4']);
		        }
               $data['find']         =  $request->find;
               $data['find_text']    =  $request->find_text;
               $data['reserv_info']  =  $request->reserv_info;
               $data['phone_footer'] =  $request->phone_footer;
               $data['url']          =  $request->url;
               $data['mail']         =  $request->mail;
               $data['hours']        =  $request->hours;
               $data['closed_time']  =  $request->closed_time;
               $data['week']         =  $request->week;
               $data['times']        =  $request->times;
               $data['week_1']       =  $request->week_1;
               $data['times_1']      =  $request->times_1;
               $data['url_footer1']  =  $request->url_footer1;
               $data['url_footer2']  =  $request->url_footer2;
               $data['url_footer3']  =  $request->url_footer3;
               $data['url_footer4']  =  $request->url_footer4;
               $data['text']         =  $request->text;
				

		$update = Footer::where($request->id)->update($data);
    return redirect('admin/page/edit'); 		  
    }
}
