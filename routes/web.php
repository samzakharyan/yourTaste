<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

 // Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'IndexController@index')->name('index');




Route::get('/admin', 'AdminController@admin')->name('admin');
Route::get('/users', 'AdminController@users')->name('users'); 
Route::get('/edit-user/{id}', 'AdminController@edit')->name('user.edit');
Route::post('/edit-update/{id}', 'AdminController@update')->name('user.update');                                                         
Route::delete('/delete{id}', 'AdminController@delete')->name('delete');



