<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Http\Requests\TeamRequest;
class TeamController extends Controller
{
	public function team() {
		$team = Team::first();
		return view('admin.pages-edit.team')->with('team', $team); 	
	}
    
    public function teamUpdate(TeamRequest $request) {
    	   $team = Team::where($request->id)->first();
    	   $data = array();
    	   $validated = $request->validated();

				if ($request->file('image_team1')) {
		        	$file     = $request->file('image_team1');
		        	$data['image_team1']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['image_team1']);
		        }

		        if ($request->file('icon_1_1')) {
		        	$file     = $request->file('icon_1_1');
		        	$data['icon_1_1']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['icon_1_1']);
		        }
		        if ($request->file('icon_1_2')) {
		        	$file     = $request->file('icon_1_2');
		        	$data['icon_1_2']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['icon_1_2']);
		        }

		        if ($request->file('image_team2')) {
		        	$file     = $request->file('image_team2');
		        	$data['image_team2']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['image_team2']);
		        }

		        if ($request->file('icon_2_1')) {
		        	$file     = $request->file('icon_2_1');
		        	$data['icon_2_1']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['icon_2_1']);
		        }
		        if ($request->file('icon_2_2')) {
		        	$file     = $request->file('icon_2_2');
		        	$data['icon_2_2']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['icon_2_2']);
		        }

		        if ($request->file('image_team3')) {
		        	$file     = $request->file('image_team3');
		        	$data['image_team3']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['image_team3']);
		        }

		        if ($request->file('icon_3_1')) {
		        	$file     = $request->file('icon_3_1');
		        	$data['icon_3_1']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['icon_3_1']);
		        }
		        if ($request->file('icon_3_2')) {
		        	$file     = $request->file('icon_3_2');
		        	$data['icon_3_2']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
		        	$move     = $file->move(public_path() . '/user/images/', $data['icon_3_2']);
		        }

			
				$data['title_team']    =  $request->title_team;
                $data['subtitle_team'] =  $request->subtitle_team;        
                $data['text_team1']    =  $request->text_team1;             
                $data['url_1_1']       =  $request->url_1_1;
                $data['url_1_2']       =  $request->url_1_2;
                $data['name_team1']    =  $request->name_team1;
                $data['position_1']    =  $request->position_1;
                $data['text_team2']    =  $request->text_team2;
                $data['url_2_1']       =  $request->url_2_1;
                $data['url_2_2']       =  $request->url_2_2;
                $data['name_team2']    =  $request->name_team2;
                $data['position_2']    =  $request->position_2;
                $data['text_team3']    =  $request->text_team3;
                $data['url_3_1']       =  $request->url_3_1;
                $data['url_3_2']       =  $request->url_3_2;
                $data['name_team3']    =  $request->name_team3;
                $data['position_3']    =  $request->position_3;
			

		$update = Team::where($request->id)->update($data);
        return redirect('admin/page/edit'); 	
		  
    }
}
