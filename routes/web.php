<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', 'IndexController@index')->name('index');

Route::get('/admin', 'AdminController@admin')->name('admin');
Route::get('/users', 'AdminController@users')->name('users'); 
Route::get('/user-edit/{id}','AdminController@useredit')->name('user-edit');
Route::put('/user-update/{id}','AdminController@userupdate')->name('user-update'); 
 
Route::get('/user-add','AdminController@useradd')->name('user-add');
Route::post('add-user', 'AdminController@adduser')->name('add-user');

//Route::post('/user-delete/{id}', 'AdminController@userdelete')->name('user-delete');
Route::delete('/user-delete/{id}', 'AdminController@userdelete')->name('user-delete');