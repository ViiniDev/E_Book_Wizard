<?php

use Core\App;
use Core\Container;
use Core\Database;
use Models\Cart;
use Models\Ebook;
use Models\User;
use Stripe\Stripe;

$container = new Container();

$container->bind('Core\Database', function () {
    $config = require base_path('config/config.php');

    return new Database($config['database']);
});

$container->bind('Models\Cart', function () {
    return new Cart();
});

$container->bind('Models\Ebook', function () {
    return new Ebook();
});

$container->bind('Models\User', function () {
    return new User();
});

$container->bind('Stripe\StripeClient', function () {
    $config = require base_path('config/stripe.php');
    $stripe = new \Stripe\StripeClient($config['stripe']['secret_key']);
    Stripe::setApiKey($config['stripe']['secret_key']);
    return $stripe;
});

App::setContainer($container);
