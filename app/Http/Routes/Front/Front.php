<?php

Route::group(['middleware' => 'auth'], function(){
	Route::group(['namespace' => 'User'], function(){
		Route::get('dashboard', 'DashboardController@index')->name('front.user.dashboard');
		Route::get('profile/edit', 'ProfileController@edit')->name('front.user.profile.edit');
		Route::patch('profile/update', 'ProfileController@update')->name('front.user.profile.update');
	});
});