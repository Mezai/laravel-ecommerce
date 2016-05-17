<?php
Route::group(['middleware' => 'admin'], function(){
	Route::group(['namespace' => 'Admin'], function () {
	Route::get('dashboard', 'DashboardController@index')->name('back.pages.dashboard');
	Route::post('dashboard', 'DashboardController@index')->name('back.pages.dashboard');


	Route::resource('products', 'ProductsController', ['parameters' => [
		'products' => 'id'
		]] , ['names' => [
    	'create' => 'back.pages.products.create',
    	'show' => 'back.pages.products.show',
    	'index' => 'back.pages.products.index',
    	'update' => 'back.pages.products.update'
	]]);

	Route::resource('customers', 'CustomersController', ['parameters' => [
			'customers' => 'id'
		]] , ['names' => [
		'index' => 'back.pages.customers.index',
		'create' => 'back.pages.customers.create',
		'update' => 'back.pages.customers.update',	

	]]);


	});
});
