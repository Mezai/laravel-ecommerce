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



Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
  //Dashboard

  Route::get('dashboard', function () {
        return 'successful';
    });
    Route::get('/', function () {
          return 'fail';
      });
  Route::get('login', 'Admin\AuthController@showLoginForm');
  Route::post('login', 'Admin\AuthController@postLogin');
  Route::get('password/reset', 'Admin\PasswordController@resetPassword');

});
