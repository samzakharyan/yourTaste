<?php

use Illuminate\Support\Facades\Route;
Route::get('/', 'IndexController@index')->name('index');
   Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
   Route::post('/login', 'Auth\LoginController@login')->name('login');
   Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
   Route::post('/register', 'Auth\RegisterController@register')->name('registerform');
   Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
   Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
   Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
   Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
   Route::post('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::group(['prefix' => 'admin'], function() {
	Route::get('/', 'AdminController@admin')->name('admin.admin');

  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout'); 
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
  //Admins Panel
  Route::get('admins', 'AdminController@admins')->name('admin.admins'); 
  Route::get('admins/edit/{id}','AdminController@adminsedit')->name('admin.edit-admin');
  Route::put('admins/update/{id}','AdminController@adminsupdate')->name('admin.update-admin'); 
  Route::post('admins/delete/{id}',  'AdminController@admindelete')->name('admin.delete-admin');	
  Route::get('admins/add','AdminController@showAdminRegisterForm')->name('admins.register');
  Route::post('create/admins', 'AdminController@createAdmin')->name('create-admins');
	//User Panel
	Route::get('users', 'UsersController@users')->name('admin.users'); 
	Route::get('user/edit/{id}','UsersController@useredit')->name('admin.edit');
	Route::put('user/update/{id}','UsersController@userupdate')->name('admin.update'); 
	Route::post('user/delete/{id}',  'UsersController@delete')->name('admin.delete');	
	Route::get('user/add','UsersController@useradd')->name('admin.add');
	Route::post('/register', 'Auth\RegisterController@register')->name('registerform');
   //Header
	Route::put('header/update','HeaderController@logoUpdate')->name('admin.logo-update');
	Route::put('header/phone/update','HeaderController@phoneUpdate')->name('admin.header-phone-update'); 
	Route::put('header/title/update','HeaderController@titleUpdate')->name('admin.header-title-update'); 
  Route::put('header/menu/update','HeaderController@menuUpdate')->name('admin.header-menu-update');
  //Page Edit
	Route::get('page/edit','IndexController@pageEdit')->name('admin.page-edit');
  //Slid
  Route::get('slid','SlidController@slid')->name('admin.slid');
	Route::put('slid/update','SlidController@slidUpdate')->name('admin.slid-update');
	//About
  Route::get('about', 'AboutController@about')->name('admin.about');
	Route::put('about/update','AboutController@aboutUpdate')->name('admin.about-update');
  //Team
  Route::get('team','TeamController@team')->name('admin.team');
	Route::put('tean/update','TeamController@teamUpdate')->name('admin.team-update');
  //Menu
  Route::get('menu','MenuController@menu')->name('admin.menu');
	Route::put('menu/update','MenuController@menuUpdate')->name('admin.menu-update');
	//Testimonials
  Route::get('testimonials','TestimonialsController@testimonials')->name('admin.testimonials');
	Route::put('testimonials/update','TestimonialsController@testimonialsUpdate')->name('admin.testimonials-update');
	//Footer
  Route::get('footer','FooterController@footer')->name('admin.footer');
	Route::put('footer/update','FooterController@footerUpdate')->name('admin.footer-update');
	//email
	Route::post('/sendemail', 'ContactController@send')->name('sendemail');

  //Products
  Route::get('products', 'ProductsController@products')->name('admin.products'); 
  Route::get('products/add', 'ProductsController@productsadd')->name('admin.products-add'); 
  Route::post('products/create','ProductsController@productscreate')->name('admin.create-products');
  Route::get('products/edit/{id}', 'ProductsController@productsedit')->name('admin.products-edit');
  Route::put('products/update/{id}','ProductsController@productsupdate')->name('admin.products-update');
  Route::post('products/delete/{id}',  'ProductsController@productdelete')->name('admin.products-admin');  
  //Admin Reserve
 // Route::get('reserve', 'OrderController@adminreserve')->name('admin.reserve');

});

Route::group(['prefix' => 'home'], function() {
   Route::get('/', 'HomeController@home')->name('home');
   // Edit Info
   Route::get('edit/info/{id}', 'HomeController@edit')->name('edit-info');
   Route::put('info/update/{id}','HomeController@infoupdate')->name('info.update');
   //Products 
   Route::get('products', 'HomeController@products')->name('products');
   //Reserve
   Route::get('reserve/table', 'ReserveController@reserve')->name('reserve');
   Route::post('table/reserve', 'ReserveController@teblereserve')->name('teble-reserve');
   //Order
   Route::get('reserve/list/{id}', 'OrderController@reservelist')->name('reserve-list');
   //Cart/Stripe
   Route::get('cart', 'CartController@cart')->name('cart'); 
   Route::post('/store', 'CartController@store')->name('stripe.store');
    Route::post('cancle/reserve/{id}',  'OrderController@cancle')->name('cancle-reserve');  
});




