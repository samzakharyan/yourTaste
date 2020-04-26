<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Hash;
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

	public function useredit(Request $request, $id){ 
		// $int = (int)$id;  
		// if (is_int($int)) {                            	
		$users=User::findOrFail($id);
		return view('admin.user-edit')->with('users', $users);                          

	}

	public function  userupdate(Request $request, $id){
		$validator=$request->validate([
			'name'  => 'required|min:4',
			'email' => 'required|email',
		]);

		try{
			$users=User::find($id);
			$users->name=$request->input('name');
			$users->email=$request->input('email');
			$users->update();
			return redirect('/users');
		}

		catch(Exception $e){
			return  $e->getMessage();

		}
		
	}

	public function useradd()
	{
		return view('admin.user-add');   
	}


	public function adduser(Request $request)
	{  	$validator=$request->validate([
		'name'  => 'required|min:4',
		'email' => 'required|email',
		'password' => 'required|min:6|max:20',  
	]);

	try{
		$users= new User;
		$users->name=$request->input('name');
		$users->email=$request->input('email');
		$users->password=Hash::make($request->input('password'));
		$users->save();
		return redirect('/users');

	}

	catch(Exception $e){
		return  $e->getMessage();

	}
	
}

// public function userdelete($id)
// { 
// 	$user=User::findOrFail($id);
// 	$user->delete();
// 	return redirect('/users');
// }


public function userdelete(Request $request, $id)
{      
	$user=User::findOrFail($id);
	$user->delete();
	return $user;
	

}






}
