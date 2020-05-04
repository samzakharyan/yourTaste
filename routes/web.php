<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'IndexController@index')->name('index');



Route::group(['prefix' => 'admin'], function() {
	Route::get('admin', 'AdminController@admin')->name('admin.admin');
	Route::get('users', 'AdminController@users')->name('admin.users'); 
	Route::get('user-edit/{id}','AdminController@useredit')->name('admin.edit');
	Route::put('user-update/{id}','AdminController@userupdate')->name('admin.update'); 
	Route::post('user/delete/{id}',  'AdminController@delete')->name('admin.delete');	
	Route::get('user-add','AdminController@useradd')->name('admin.add');
	Route::post('add-user', 'AdminController@adduser')->name('admin.user');


	
	// Route::get('user-delete/{id}',  'AdminController@userdelete')->name('admin.delete');

});


