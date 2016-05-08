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

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('products', 'ProductController@index');
Route::get('categories', 'CategoryController@index');
Route::get('checkout', 'CheckoutController@index');

Route::post('cart/add', 'CartController@add');
Route::resource('cart', 'CartController');


Route::group(['middleware' => 'web'], function() {

	Route::group(['namespace' => 'front'], function() {
		require (__DIR__ . '/Routes/Front/Front.php');
        require (__DIR__ . '/Routes/Front/Access.php');
	});
});




Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

Route::get('dashboard', 'Admin\DashboardController@index');

});
