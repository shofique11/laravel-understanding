<?php

namespace App\Http\Controllers;
use App\Contracts\PaymentGateway;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $paymentGateway;
    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function stripeProcessOrder(){
        $response = $this->paymentGateway->charge(500);
        return response()->json(['message' => $response]);
    }

  public function paypalProcessOrder(){
    $response = $this->paymentGateway->charge(800);
    return response()->json(['message' => $response]);
  }
}
