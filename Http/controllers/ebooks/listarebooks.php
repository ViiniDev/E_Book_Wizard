<?php

use Core\App;
use Models\Ebook;

// Instancie a classe Ebook
$ebookModel = App::resolve(Ebook::class);

try {
    // Obtenha todos os ebooks usando o método getAllEbooks()
    $ebooks = $ebookModel->getAllEbooks();

    // Defina o cabeçalho da resposta como JSON
    header('Content-Type: application/json');

    // Retorne os ebooks como JSON
    echo json_encode($ebooks);
} catch (\Exception $e) {
    // Em caso de erro, retornar uma resposta de erro em JSON
    echo json_encode(['error' => $e->getMessage()]);
}
