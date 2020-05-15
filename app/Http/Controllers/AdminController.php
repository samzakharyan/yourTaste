<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Session;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller {
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
		$users = User::all();

		return view('admin.user.users')->with('users', $users);   
	}

	public function useredit(Request $request, $id)
	{
		$users = User::findOrFail($id);

		return view('admin.user.user-edit')->with('users', $users);                          
	}

	public function  userupdate(Request $request, $id)
	{
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

			return redirect('admin/user/users')->with('status','User successfully edited');
		}

		catch(Exception $e)
		{
			return  $e->getMessage();
		}
	}

	public function useradd() 
	{
		return view('admin.user/user-add');   
	}

	public function  delete(Request $request, $id) {
		if ($request->reason == 'check') {
			if (Auth::user()->id == $id) {
				return response()->json(['msg' => 'You are want to delete your account. Are you sure?']);
			} else {
				return response()->json(['msg' => 'Are you sure delete this user?']);
			}
		} else if ($request->reason == 'delete') {
			$delete = User::where(['id' => $id])->delete();
		
			return $delete ? response()->json(['fail' => false, 'msg' => 'You are successfully deleted.']) : 
			response()->json(['fail' => true, 'msg' => 'Something went wrong. Please try again.']);	
		}
	}
}
