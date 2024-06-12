<?php
use Core\App;
use Models\Cart;
use Models\User;
use Models\Ebook;

$userModel = App::resolve(User::class);
$currentUserId = $userModel->get_User_Id();

if (!isset($_POST['ebook_id']) || empty($_POST['ebook_id'])) {
    die('O campo ebook_id é obrigatório.');
}

$ebookId = $_POST['ebook_id'];

$ebookModel = App::resolve(Ebook::class);
$ebook = $ebookModel->getEbookById($ebookId);

if (!$ebook) {
    die('Ebook não encontrado.');
}

$ebookTitle = $ebook['title'];
$ebookPrice = $ebook['price'];
$quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;

$cartModel = App::resolve(Cart::class);
$cartModel->addToCart($currentUserId, $ebookId, $quantity, $ebookTitle, $ebookPrice);

header('location: /ebooks');
exit();
