<?php

use App\Contracts\PaymentGateway;

class PaypalPaymentGateway implements PaymentGateway{
    public function charge($amount): string
    {
        return "Charging {$amount} using Paypal.";
    }
}
?>