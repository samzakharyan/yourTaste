<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Logo;
use App\Http\Requests\HeaderRequest;
use App\Http\Requests\PhoneRequest;
use App\Http\Requests\MenuHeaderRequest;
use Session;


class HeaderController extends Controller {
	    public function logoUpdate(Request $request) {
        $logo = Logo::first();
        			$validation = $request->validate(
				[
					'name'        => 'max:50',           
					'image_logo'  => 'image|mimes:jpeg,png,jpg,gif|max:2048',
				]);
        $data = array();
            if ($request->name) {
            	$data['name'] =$request->name;
            	$data['image_logo'] =null;
            }
            else{
		        if ($request->file('image_logo')) {
		        	$file     = $request->file('image_logo');
		        	$data['image_logo']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['image_logo']);
		        }
		        $data['name']=null;
            }   


		  $update = Logo::where($request->id)->update($data);
		  return redirect('admin/page/edit'); 
	}  


	public function titleUpdate(HeaderRequest $request) {
		$data = array();
        $validated = $request->validated();
		if ($request->file('favicon')) {
			$file     = $request->file('favicon');
			$data['favicon']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
			$move     = $file->move(public_path() . '/user/images/', $data['favicon']);
		}
		$data['column'] = $request->column;
		$update = Logo::where($request->id)->update($data);
		return redirect('admin/page/edit'); 
	}


	public function menuUpdate(MenuHeaderRequest $request) {
        $validated = $request->validated();
		$data = [
            'menu_1'   =>  $request->menu_1,
            'menu_2'   =>  $request->menu_2,
            'menu_3'   =>  $request->menu_3,
            'menu_4'   =>  $request->menu_4,
            'menu_5'   =>  $request->menu_5,
		];
		$update = Logo::where($request->id)->update($data);
		return redirect('admin/page/edit');
	}
}
