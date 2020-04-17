<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth'); 
	}




	public function admin()
	{
		return view('admin.admin');   
	}


	public function users()
	{

		$users=User::all();
		return view('admin.users')->with('users', $users);   
	}




	public function edit(Request $request, $id)
	{
		if (is_int($id) && $id < 0) {
			$user=User::findOrFail($id);	
			return view('admin.edit-user')->with('users', $user);	
		} else {
			return abort(404);		   
		}
	}


	public function delete(Request $request, $id)
	{      

		$user=User::findOrFail($id);
		$user->delete();
		return redirect('/users')->with('status', 'Your Data Is Deleted');

	}

}
