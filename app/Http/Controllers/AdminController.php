<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use App\Http\Requests\UserUpdateRequest;
use Exception;
use Session;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller {
	public function __construct() {
		$this->middleware('auth:admin'); 
	}

	public function admin() {
		return view('admin.admin');  
	}

	public function admins() {
		$admins = Admin::all();
		return view('admin.admins.admins')->with('admins', $admins);  
	}

	public function adminsedit(Request $request, $id) {
		$admins = Admin::findOrFail($id);
		return view('admin.admins.admins-edit')->with('admins', $admins);                          
	}

	public function  adminsupdate(UserUpdateRequest $request, $id) {
		$validated = $request->validated();
		$data = [
			'name'  => $request->name,
			'email' => $request->email,
			
		];
		$update = Admin::find($id)->update($data);
		Session::flash('statuscode','success');
		return redirect('admin/admins')->with('status','Admin successfully edited');
	}

	public function showAdminRegisterForm() {
		return view('admin.admins/admins-add');   
	}

	public function  createAdmin(Request $request) {
        $validation = $request->validate(
        [
           'name'  => 'required|min:4',
           'email'  =>  'required|email',
           'password'  =>  'required|min:8',
           'password_confirmation'   =>  'required|same:password', 
            
        ]);
       $data=[
         'name' => $request->name,
         'email' => $request->email,
         'password' => Hash::make($request->password),
       ];
       $insert = Admin::where($request->id)->insert($data);
	   Session::flash('statuscode','success');
	   return redirect('admin/admins')->with('status','Admin successfully created');
	}

	public function  admindelete(Request $request, $id) {

		if ($request->reason == 'check') {
			if (Auth::user()->id == $id) {
				return response()->json(['msg' => 'You are want to delete your account.']);
			} else {
				return response()->json(['msg' => 'You are want to delete this admin?']);
			}
		 }
		else if ($request->reason == 'delete') {
			$delete = Admin::where(['id' => $id])->delete();
		
			return $delete ? response()->json(['fail' => false, 'msg' => 'You are successfully deleted.']) : 
			response()->json(['fail' => true, 'msg' => 'Something went wrong. Please try again.']);	
		}
	}

}
