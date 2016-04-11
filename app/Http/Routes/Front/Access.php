<?php


//Access

Route::group(['namespace' => 'Auth'], function () {

  //Must be logged in to Access
  Route::group(['middleware' => 'auth'], function () {
    Route::get('logout', 'AuthController@logout')->name('auth.logout');

    Route::get('password/change', 'PasswordController@showChangePasswordForm')->name('auth.password.change');
    Route::post('password/change', 'PasswordController@changePassword')->name('auth.password.update');

  });

});

//Do not need to be logged in to access these
Route::group(['middleware' => 'guest'], function () {
  //Auth
  Route::get('login', 'AuthController@showLoginForm')->name('auth.login');
  Route::post('login', 'AuthController@login');

  //register
  Route::get('register', 'AuthController@showRegistrationForm')->name('auth.register');
  Route::post('register', 'AuthController@register');

  //reset password

  Route::get('password/reset/{token?}', 'PasswordController@showResetForm')->name('auth.password.reset');
  Route::post('password/email', 'PasswordController@sendResetLinkEmail');
  Route::post('password/reset', 'PasswordController@reset');


  //confirm account

  Route::get('account/confirm/{token}', 'AuthController@confirmAccount')->name('account.confirm');
  Route::get('account/confirm/resend/{user_id}', 'AuthController@resendConfirmationEmail')->name('account.confirm.resend');

});
