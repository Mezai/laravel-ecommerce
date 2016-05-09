<?php

Route::group(['namespace' => 'Auth'], function () {
    //Logged in
    	Route::group(['middleware' => 'admin'], function () {
        
        Route::get('logout', 'AuthController@logout');

    });
    //Guest
    	Route::group(['middleware' => 'web'], function(){

    	Route::get('login','AuthController@showLoginForm');
		Route::post('login','AuthController@login');
	});
});

