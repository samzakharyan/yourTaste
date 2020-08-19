<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Session;
class ProductsController extends Controller
{


	public function products() {
		$products = Products::all();
		return view('admin.products.products')->with('products', $products);   
	}

		public function productsadd() {
		return view('admin.products.products-add');   
	}

	

	public function productscreate(Request $request) {
        $validation = $request->validate(
        [
           'name'       => 'required|min:4',
           'price'      => 'required',
           'count'      => 'required',
           'content'    => 'required|min:2|max:50',
           'categories' => 'required',
           'image'      => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            
        ]);

            if ($request->file('image')) {
                $file     = $request->file('image');
                $data['image']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
                $move     = $file->move(public_path() . '/user/images/', $data['image']);
            }  
                 $data['name']          = $request->name;
                 $data['price']         = $request->price;
                 $data['count']         = $request->count;
                 $data['description']       = $request->content;
                 $data['categories']    = $request->categories;
       $insert = Products::where($request->id)->insert($data);
	   Session::flash('statuscode','success');
	   return redirect('admin/products')->with('status','Products successfully created');
	}


	public function productsedit(Request $request, $id) {
	    $products = Products::findOrFail($id);
		return view('admin.products.products-edit')->with('products', $products);   
	}

	

	public function  productsupdate(Request $request, $id) {
        $validation = $request->validate(
        [
           'name'       => 'required|min:4',
           'price'      => 'required',
           'count'      => 'required',
           'content'    => 'required|min:2|max:50',
           'categories' => 'required',
           'image'      => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            
        ]);

            if ($request->file('image')) {
                $file     = $request->file('image');
                $data['image']  = md5(microtime()) . '.' . $file->getClientOriginalExtension();
                $move     = $file->move(public_path() . '/user/images/', $data['image']);
            }  
                 $data['name']          = $request->name;
                 $data['price']         = $request->price;
                 $data['count']         = $request->count;
                 $data['description']       = $request->content;
                 $data['categories']    = $request->categories;

		$update = Products::find($id)->update($data);
		Session::flash('statuscode','success');
		return redirect('admin/products')->with('status','Product successfully edited');
	}


		public function  productdelete(Request $request, $id) {

		if ($request->reason == 'check') {
			return response()->json(['msg' => 'You are want to delete this product?']);
		 }
		else if ($request->reason == 'delete') {
			$delete = Products::where(['id' => $id])->delete();
		
			return $delete ? response()->json(['fail' => false, 'msg' => 'You are successfully deleted.']) : 
			response()->json(['fail' => true, 'msg' => 'Something went wrong. Please try again.']);	
		}
	}
    
}
