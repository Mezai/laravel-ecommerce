<?php

Route::group(['middleware' => 'auth'], function(){
	Route::group(['namespace' => 'User'], function(){
		Route::get('dashboard', 'DashboardController@index')->name('front.user.dashboard');
		Route::post('dashboard', 'DashboardController@index')->name('front.user.dashboard');		
	});
});

