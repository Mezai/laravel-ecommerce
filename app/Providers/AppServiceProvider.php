<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Cart;
use App\Product;
class AppServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('back.partials.sidebar', function($view){
            $view->with('total_products', Product::all()->count());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
