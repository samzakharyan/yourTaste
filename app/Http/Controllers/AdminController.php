<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Session;
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
			Session::flash('statuscode','success');
			return redirect('admin/users')->with('status','User successfully edited');
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
		'email' => 'required|email|unique:users,email',
		'password' => 'required|min:6|max:20',  
	]);

	try{
		$users= new User;
		$users->name=$request->input('name');
		$users->email=$request->input('email');
		$users->password=Hash::make($request->input('password'));
		$users->save();
		Session::flash('statuscode','success');
		return redirect('admin/users')->with('status','User successfully Add');

	}

	catch(Exception $e){
		return  $e->getMessage();

	}
	
}


public function  delete(Request $request, $id)
{    
	$user=User::find($id);
	if (Auth::user()->id == $id){
		print  'You are an administrator.Are you sure!!You want to Delete?';

	}
	else{
		print  'Are you sure!!You want to Delete this User?';
	}              
}



public function  userdelete(Request $request, $id)
{           
	$user=User::find($id);
	$user->delete();
	return $user;

	
}





}
