<?php

namespace App\Providers;

use App\Services\StripePaymentGateway;
use App\Contracts\PaymentGateway;
use Illuminate\Support\ServiceProvider;
use PaypalPaymentGateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
       // $this->app->bind(PaymentGateway::class, StripePaymentGateway::class, PaypalPaymentGateway::class);
        $this->app->singleton(PaymentGateway::class, StripePaymentGateway::class,PaypalPaymentGateway::class);
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
