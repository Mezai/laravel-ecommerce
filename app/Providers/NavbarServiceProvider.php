<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class NavbarServiceProvider extends ServiceProvider
{
	/**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            ['front.partials.nav'],
            'App\Http\ViewComposers\FrontNavigationComposer'
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
