<?php


Route::group(['middleware' => 'admin'], function() {
	Route::group(['namespace' => 'Admin'], function() {
	Route::get('logout','AuthController@logout');

	

	});

});


	