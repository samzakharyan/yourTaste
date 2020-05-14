<?php

use Illuminate\Support\Facades\Route;
Route::get('/', 'IndexController@index')->name('index');
Route::group(['prefix' => 'admin'], function() {
	Route::get('/', 'AdminController@admin')->name('admin.admin');
	//User Panel
	Route::get('users', 'AdminController@users')->name('admin.users'); 
	Route::get('user/edit/{id}','AdminController@useredit')->name('admin.edit');
	Route::put('user/update/{id}','AdminController@userupdate')->name('admin.update'); 
	Route::post('user/delete/{id}',  'AdminController@delete')->name('admin.delete');	
	Route::get('user-add','AdminController@useradd')->name('admin.add');
	//Login, Register, Logout	
	Route::post('/register', 'Auth\RegisterController@register')->name('register');
	Route::post('/login', 'Auth\LoginController@login')->name('login');
	Route::get('/login', 'Auth\LoginController@showLoginForm')->name('loginform');
	Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    //Logo Panel
	Route::get('header','HeaderController@logo')->name('admin.header');
	Route::get('header/edit/{id}','HeaderController@logoedit')->name('admin.header-edit');
	Route::put('header/update','HeaderController@logoUpdate')->name('admin.header-update'); 
	Route::get('header/phone/edit/{id}','HeaderController@phoneedit')->name('admin.header-phone-edit');
	Route::put('header/phone/update','HeaderController@phoneUpdate')->name('admin.header-phone-update'); 
});

