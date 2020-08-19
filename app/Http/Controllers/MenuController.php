<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Http\Requests\MenuRequest;
class MenuController extends Controller
{

	public function menu() {
		$menu = Menu::first();
		return view('admin.pages-edit.menu')->with('menu', $menu); 	
	}

     public function menuUpdate(MenuRequest $request) {
    	   $menu = Menu::where($request->id)->first();
    	   $data = array();
           $validated = $request->validated();

				if ($request->file('image_menu1')) {
		        	$file     = $request->file('image_menu1');
		        	$data['image_menu1']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['image_menu1']);
		        }

		        if ($request->file('image_menu2')) {
		        	$file     = $request->file('image_menu2');
		        	$data['image_menu2']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['image_menu2']);
		        }

		        if ($request->file('image_menu3')) {
		        	$file     = $request->file('image_menu3');
		        	$data['image_menu3']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['image_menu3']);
		        }

		        if ($request->file('image_menu4')) {
		        	$file     = $request->file('image_menu4');
		        	$data['image_menu4']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['image_menu4']);
		        }

		        if ($request->file('image_menu5')) {
		        	$file     = $request->file('image_menu5');
		        	$data['image_menu5']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['image_menu5']);
		        }

		        if ($request->file('image_menu6')) {
		        	$file     = $request->file('image_menu6');
		        	$data['image_menu6']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['image_menu6']);
		        }
			
			
				$data['title_menu'    ] = $request->title_menu;
                $data['subtitle_menu' ] = $request->subtitle_menu;        
                $data['name_menu1']     = $request->name_menu1;
                $data['info_1']         = $request->info_1;
                $data['price_1']        = $request->price_1;   
                $data['name_menu2']     = $request->name_menu2;
                $data['info_2']         = $request->info_2;
                $data['price_2']        = $request->price_2;
                $data['name_menu3']     = $request->name_menu3;
                $data['info_3']         = $request->info_3;
                $data['price_3']        = $request->price_3;
                $data['name_menu4']     = $request->name_menu4;
                $data['info_4']         = $request->info_4;
                $data['price_4']        = $request->price_4;   
                $data['name_menu5']     = $request->name_menu5;
                $data['info_5']         = $request->info_5;
                $data['price_5']        = $request->price_5;
                $data['name_menu6']     = $request->name_menu6;
                $data['info_6']         = $request->info_6;
                $data['price_6']        = $request->price_6;

		$update = Menu::where($request->id)->update($data);
        return redirect('admin/page/edit'); 	
		  
    }
}
