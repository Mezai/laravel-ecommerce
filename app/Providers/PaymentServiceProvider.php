<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Ecommerce\Payment\PaymentInterface', 'Ecommerce\Payment\StripePayment');
    }
}
