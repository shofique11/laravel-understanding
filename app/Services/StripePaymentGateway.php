<?php
namespace App\Services;

use App\Contracts\PaymentGateway;

Class StripePaymentGateway implements PaymentGateway{
    public function charge($amount): string
    {
        return "Charging {$amount} using Stripe.";
    }
}

?>