<?php

Route::group(['namespace' => 'Auth'], function(){
	//Logged in
	Route::group(['middleware' => 'auth'], function(){
		
		Route::get('logout', 'AuthController@logout')->name('auth.logout');

		Route::get('password/change', 'PasswordController@showChangePasswordForm')->name('auth.password.change');

		Route::post('password/change', 'PasswordController@changePassword')->name('auth.password.update');

	});
	//Guest
	Route::group(['middleware' => 'guest'], function(){
		//Login
		Route::get('login', 'AuthController@showLoginForm')->name('front.auth.login');
		Route::post('login', 'AuthController@login')->name('front.auth.login');
		//Register
		Route::get('register', 'AuthController@showRegistrationForm')->name('auth.register');
		Route::post('register', 'AuthController@register');	

	});
});