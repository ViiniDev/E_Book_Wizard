<?php

use Core\App;
use Models\Cart;
use Models\User;

$userModel = App::resolve(User::class);
$currentUserId = $userModel->get_User_Id();

$cartModel = App::resolve(Cart::class);
$userCart = $cartModel->getUserCart($currentUserId);

// Calcula o total a pagar
$totalCost = 0;
foreach ($userCart as $item) {
    $totalCost += $item['ebook_price'] * $item['quantity'];
}

// Carrega a view de pagamento com as variáveis necessárias
view("payment/form.view.php", [
    'heading' => 'Pagamento',
    'cart' => $userCart,
    'total_cost' => $totalCost
]);
