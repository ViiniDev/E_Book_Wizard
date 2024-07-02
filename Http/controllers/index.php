<?php

use Core\App;
use Models\Ebook;

if ($_SESSION['user']['is_admin'] ?? false) {
    view("admin.view.php", [
        'heading' => 'Home'
    ]);
}



$ebookModel = App::resolve(Ebook::class);
$latest_releases = $ebookModel->getAllEbooksByLastAdded();

view("index.view.php", [
    'heading' => 'Home',
    'latest_releases' => $latest_releases
]);
