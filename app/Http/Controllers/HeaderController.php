<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Logo;
use Session;
use DB;

class HeaderController extends Controller {

	public function logo() {
		$logo = Logo::all();
		return view('admin.header.header')->with('logo', $logo); 	
	}

	public function logoedit(Request $request, $id) {
		$logo = Logo::findOrFail($id);
		return view('admin.header.header-edit')->with('logo', $logo);  
	}

	public function logoUpdate(Request $request) {
	   $logo = Logo::where($request->id)->first();
		if ($request->type == 'text') {
			$validation = $request->validate([
				'type' 	=> 'required',
				'show' 	=> 'required',
				'name'  => 'required|min:2|max:50',  
			]);

			$data = [
				'type'			=> $request->type,
				'show'			=> $request->show,
				'name'			=> $request->name,
				'image_name'	=> null,
				'image'			=> null,
			];
		  
		}

		else {
			$validation = $request->validate(
				[
					'type'		=> 'required',
					'show'		=> 'required',
					'image_name'=> 'required|min:2|max:50',           
					'image'		=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
				]);

			if ($request->hasfile('image')) {
				$file     = $request->file('image');
				$filename = md5(microtime()) . '.' . $file->getClientOriginalExtension();
				$move     = $file->move(public_path() . '/user/images/', $filename);
			}
			else {
				return $request;
				$logo->image="";
			}
			$data = [
				'type'       => $request->type,
				'show'       => $request->show,
				'name'       => null,
				'image_name' => $request->image_name,
				'image'      => $filename,
			];
		}

          
		$update = Logo::where($request->id)->update($data);
		Session::flash('statuscode','success');
		return redirect('admin/header')->with('status','Header Logo successfully edited'); 
	  
	}


	public function phoneedit(Request $request, $id) {
		$logo = Logo::findOrFail($id);
		return view('admin.header.header-phone-edit')->with('logo', $logo);  
	}

	public function phoneUpdate(Request $request) {
		$validation = $request->validate([
			'call_name'   => 'required|min:2|max:50',
			'phone'       => 'required|numeric|min:9',
			'reserv_name' => 'required|min:2|max:50',  
		]);

		$data = [
			'call_name'   => $request->call_name,
			'phone'       => $request->phone,
			'reserv_name' => $request->reserv_name,
		];
		$update = Logo::where($request->id)->update($data);
		Session::flash('statuscode','success');
		return redirect('admin/header')->with('status','Header Settings successfully edited'); 
	}

	public function titleedit(Request $request, $id) {
		$logo = Logo::findOrFail($id);
		return view('admin.header.header-title-edit')->with('logo', $logo);  
	}

	public function titleUpdate(Request $request) {
		$validation = $request->validate([
			'column'   => 'required|min:2|max:50',
			'favicon'  => 'required|min:2|max:250',
		]);

		if ($request->hasfile('favicon')) {
			$file     = $request->file('favicon');
			$favicon  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
			$move     = $file->move(public_path() . '/user/images/', $favicon);
		}
		else {
			return $request;
			$logo->favicon="";
		}

		$data = [
			'column'   => $request->column,
			'favicon'  => $favicon,
		];
		$update = Logo::where($request->id)->update($data);
		Session::flash('statuscode','success');
		return redirect('admin/header')->with('status','Header Title successfully edited'); 
	}
}
