<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Exception;
use App\Models\Logo;
use Session;
class HeaderController extends Controller
{
	public function logo() 
	{
		$logo=Logo::all();

		return view('admin.header.header')->with('logo', $logo); 	
	}

	public function logoedit(Request $request, $id) 
	{
		$logo = Logo::findOrFail($id);

		return view('admin.header.header-edit')->with('logo', $logo);  
	}
	public function logoUpdate(Request $request)
	{
		$logo=Logo::where($request->id)->first();
		if ($request->type == 'text') 
		{
			$validation = $request->validate([
				'type' => 'required',
				'show' => 'required',
				'name'       => 'required|min:2|max:50',  
			]);

			$logo->type=$request->input('type');
			$logo->show=$request->input('show');
			$logo->name=$request->input('name');
			$logo->image_name=$request->input('image-name');
			$logo->image=$request->input('image');
	    }
		else {
			$validation=$request->validate([
				'type' => 'required',
				'show' => 'required',
				'image-name' => 'required|min:2|max:50',           
				'image'      => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
			]);

			$logo->type=$request->input('type');
			$logo->show=$request->input('show');
			$logo->name=$request->input('name');
			$logo->image_name=$request->input('image-name');
			if($request->hasfile('image'))
			{
				$file=$request->file('image');
				$data=$file->getClientOriginalExtension();
				$filename=time(). '.'.$data;
				$file->move('user/images/', $filename);
				$logo->image=$filename;
			}
			else{
				return $request;
				$logo->image="";
			};
		}       
		$logo->update();	
		Session::flash('statuscode','success');

		return redirect('admin/header')->with('status','Logo successfully edited'); 
	}

	public function phoneedit(Request $request, $id) 
	{
		$logo = Logo::findOrFail($id);

		return view('admin.header.header-phone-edit')->with('logo', $logo);  
	}

	public function phoneUpdate(Request $request) 
	{
		$validation = $request->validate([
			'call_name' => 'required|min:2|max:50',
			'phone' => 'required|numeric|min:9',
			'reserv_name'=> 'required|min:2|max:50',  
		]);

		$logo=Logo::where($request->id)->first();
		$logo->call_name=$request->input('call_name');
		$logo->phone=$request->input('phone');
		$logo->reserv_name=$request->input('reserv_name');
		$logo->update();	
		Session::flash('statuscode','success');
		
		return redirect('admin/header')->with('status','Phone successfully edited'); 
	}

}
