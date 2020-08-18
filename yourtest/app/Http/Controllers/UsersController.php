<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserUpdateRequest;
use App\User;
use Session;
class UsersController extends Controller
{

	public function __construct() {
		$this->middleware('auth:admin'); 
	}

    public function users() {
		$users = User::all();
		return view('admin.user.users')->with('users', $users);   
	}

	public function useredit(Request $request, $id) {
		$users = User::findOrFail($id);
		return view('admin.user.user-edit')->with('users', $users);                          
	}

	public function  userupdate(UserUpdateRequest $request, $id) {
		$validated = $request->validated();
		$data = [
			'name'  => $request->name,
			'email' => $request->email,
			
		];
		$update = User::find($id)->update($data);
		Session::flash('statuscode','success');
		return redirect('admin/users')->with('status','User successfully edited');
	}

	public function useradd() {
		return view('admin.user/user-add');   
	}

	public function  delete(Request $request, $id) {

		if ($request->reason == 'check') {
			return response()->json(['msg' => 'You are want to delete this user?']);
		 }
		else if ($request->reason == 'delete') {
			$delete = User::where(['id' => $id])->delete();
		
			return $delete ? response()->json(['fail' => false, 'msg' => 'You are successfully deleted.']) : 
			response()->json(['fail' => true, 'msg' => 'Something went wrong. Please try again.']);	
		}
	}
}
