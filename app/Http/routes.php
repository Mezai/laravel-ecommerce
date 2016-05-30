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
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('products', 'ProductController@index');
Route::get('categories', 'CategoryController@index');
Route::get('checkout', 'CheckoutController@index');
Route::post('payment/stripe', array('uses' => 'PaymentController@stripe'));
Route::get('confirmation/{payment}', array('uses' => 'ConfirmationController@success'));
Route::get('failed', 'ConfirmationController@failed');
Route::resource('cart', 'CartController');


Route::group(['namespace' => 'Api'], function() {
		require app_path('/Http/Routes/Api/Api.php');
});



Route::group(['namespace' => 'Front'], function() {
		require (__DIR__ . '/Routes/Front/Front.php');
        require (__DIR__ . '/Routes/Front/Access.php');
});




Route::group(['namespace' => 'Back', 'prefix' => 'admin'], function () {
	
		require (__DIR__ . '/Routes/Back/Back.php');
		
		require (__DIR__ . '/Routes/Back/Access.php');
});

