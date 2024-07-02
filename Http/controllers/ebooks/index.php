<?php

use Core\App;
use Models\Ebook;

$ebookModel = App::resolve(Ebook::class);
$ebooks = $ebookModel->getAllEbooksByTitle();

view("ebooks/index.view.php", [
    'heading' => 'Ebooks',
    'ebooks' => $ebooks
]);
