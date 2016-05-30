<?php

Route::group(['middleware' => 'auth'], function(){
	Route::group(['namespace' => 'User'], function(){
		Route::get('dashboard', 'DashboardController@index')->name('front.user.dashboard');
		Route::post('dashboard', 'DashboardController@index')->name('front.user.dashboard');

		Route::get('orders', 'DashboardController@index')->name('front.user.dashboard');


		Route::resource('address', 'AddressController',
				['parameters' => [
				'address' => 'id'
			]] , ['names' => [
			'index' => 'front.user.pages.address.index',
			'update' => 'front.user.pages.address.update',
		]]);
		
	});
});

