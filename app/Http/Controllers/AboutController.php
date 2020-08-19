<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AboutRequest;
use App\About;
use Session;

class AboutController extends Controller
{
    public function about() {
		$about = About::first();
		return view('admin.pages-edit.about')->with('about', $about); 	
	}

	public function aboutUpdate(AboutRequest $request) {
	    $about = About::where($request->id)->first();
	    $data = array();
	    $validated = $request->validated();
			if ($request->hasfile('image_about')) {
				$file     = $request->file('image_about');
				$filename_about = md5(microtime()) . '.' . $file->getClientOriginalExtension();
				$move     = $file->move(public_path() . '/user/images/', $filename_about);
			}
			$data = [
				'title_about'	    => $request->title_about,
				'subtitle_about' 	=> $request->subtitle_about,
				'description_about' => $request->description_about,	
				'image_about'	    => $filename_about,
			];
		  
		$update = About::where($request->id)->update($data);
		return redirect('admin/page/edit'); 
	}
}
