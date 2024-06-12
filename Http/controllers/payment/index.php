<?php

use Stripe\Charge;
use Stripe\Customer;


class PaymentController
{
    public function processPayment()
    {
        $token = $_POST['stripeToken'];

        $customer = Customer::create([
            'email' => 'customer@example.com',
            'source'  => $token,
        ]);

        $charge = Charge::create([
            'customer' => $customer->id,
            'amount'   => 5000,
            'currency' => 'usd',
        ]);

        header('Location: /success');
    }
}

