<?php
Route::group(['namespace' => 'Admin'], function () {

	Route::get('dashboard', 'DashboardController@index')->name('back.pages.dashboard');
	Route::post('dashboard', 'DashboardController@index')->name('back.pages.dashboard');
	Route::resource('products', 'ProductsController');
});
