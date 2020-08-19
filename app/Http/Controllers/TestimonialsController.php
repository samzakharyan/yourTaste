<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonials;
use App\Http\Requests\TestimonialsRequest;
class TestimonialsController extends Controller
{

    public function testimonials() {
        $test = Testimonials::first();
        return view('admin.pages-edit.testimonials')->with('test', $test);    
    }
      public function testimonialsUpdate(TestimonialsRequest $request) {
    	   $test = Testimonials::where($request->id)->first();
           $data = array();
           $validated = $request->validated();
                if ($request->file('image_test')) {
                    $file     = $request->file('image_test');
                    $data['image_test']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
                    $move     = $file->move(public_path() . '/user/images/', $data['image_test']);
                }
				$data['title_test']    =  $request->title_test;
                $data['description_1'] =  $request->description_1;
                $data['name_test1']    =  $request->name_test1;
                $data['text_test1']    =  $request->text_test1;
                $data['description_2'] =  $request->description_2;
                $data['name_test2']    =  $request->name_test2;
                $data['text_test2']    =  $request->text_test2;
                $data['description_3'] =  $request->description_3;
                $data['name_test3']    =  $request->name_test3;
                $data['text_test3']    =  $request->text_test3;

		$update = Testimonials::where($request->id)->update($data);
        return redirect('admin/page/edit');       

      }
}
