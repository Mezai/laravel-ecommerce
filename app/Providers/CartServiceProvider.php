<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Cart;

class CartServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            ['*'],
            'App\Http\ViewComposers\CartComposer'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
