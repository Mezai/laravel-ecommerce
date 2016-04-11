<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/**
 * Routes for the site
 *
 * @author Johan
 */

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@home');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('products', 'ProductController@index');
Route::get('categories', 'CategoryController@index');
Route::get('checkout', 'CheckoutController@index');


/**
 *  Patterns
 *
 * @author Mezai
 */

Route::pattern('id', '[0-9]+');

Route::get('login', function () {
  return view('front.auth.login');
});


/**
 * Admin routes
 * @author Mezai
 */
Route::post('cart/add', 'CartController@add');
Route::get('cart/destroy', 'CartController@destroy');
Route::post('cart/remove', 'CartController@remove');
Route::resource('cart', 'CartController');

Route::get('/admin/login', 'Admin\AuthController@showLoginForm');
Route::post('/admin/login', 'Admin\AuthController@login');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
  //Dashboard
  Route::get('dashboard', 'DashboardController@index');
  Route::get('logout', 'Admin\AuthController@logout');


});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');


});
