<?php

Route::group(['middleware' => 'admin'], function () {

    Route::group(['prefix' => 'api/v1'], function () {
        Route::resource('orders', 'OrdersController',
            ['except' => ['edit', 'destroy', 'update', 'show',
            'create']]);
    });
});
