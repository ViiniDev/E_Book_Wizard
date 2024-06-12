<?php

use Core\App;
use Models\Cart;
use Models\User;


// Limpar o carrinho do usuário após o processamento
$cartModel = App::resolve(Cart::class);
$userModel = App::resolve(User::class);
$currentUserId = $userModel->get_User_Id();
$cartModel->clearCart($currentUserId);

// Carregar a view de sucesso de pagamento
view("payment/success.view.php", [
    'heading' => 'Pagamento realizado com sucesso',
]);
