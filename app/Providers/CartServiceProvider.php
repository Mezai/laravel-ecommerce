<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider
{

    public function boot()
    {
        # code...
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('view')->composer('front.layouts.app', 'App\Http\ViewComposers\CartComposer');
    }
}
