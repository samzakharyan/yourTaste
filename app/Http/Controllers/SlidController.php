<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slid;
use App\Http\Requests\SlidRequest;
class SlidController extends Controller
{

    public function slid() {
        $slid = Slid::first();
        return view('admin.pages-edit.slid')->with('slid', $slid);    
    }

    public function slidUpdate(SlidRequest $request) {
    	   $slid = Slid::where($request->id)->first();
           $data = array();
    	   $validated = $request->validated();
                if ($request->file('slid_1')) {
                    $file     = $request->file('slid_1');
                    $data['slid_1']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
                    $move     = $file->move(public_path() . '/user/images/', $data['slid_1']);
                }  

                if ($request->file('slid_2')) {
                    $file     = $request->file('slid_2');
                    $data['slid_2']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
                    $move     = $file->move(public_path() . '/user/images/', $data['slid_2']);
                }  

                if ($request->file('slid_3')) {
                    $file     = $request->file('slid_3');
                    $data['slid_3']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
                    $move     = $file->move(public_path() . '/user/images/', $data['slid_3']);
                }
                 
                 $data['title_1']    = $request->title_1;
                 $data['text_1']     = $request->text_1;
                 $data['url_1']      = $request->url_1;
                 $data['button_1']   = $request->button_1;
                 $data['title_2']    = $request->title_2;
                 $data['text_2']     = $request->text_2;
                 $data['url_2']      = $request->url_2;
                 $data['button_2']   = $request->button_2;
                 $data['title_3']    = $request->title_3;
                 $data['text_3']     = $request->text_3;
                 $data['url_3']      = $request->url_3;
                 $data['button_3']   = $request->button_3;				
		

		$update = Slid::where($request->id)->update($data);
        return redirect('admin/page/edit');       

      }
}
