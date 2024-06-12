<?php

namespace Http\Controllers;

use Core\App;
use Models\Ebook;

class EbookController
{
    public function add()
    {
        // Verifique se é uma solicitação POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Coleta os dados do formulário
            $title = $_POST['title'];
            $author = $_POST['author'];
            $description = $_POST['description'];
            $price = $_POST['price'];
    
            // Debug: Verifique se os dados do formulário estão corretos
            // var_dump($title, $author, $description, $price);
    
            // Cria uma instância do modelo Ebook
            $ebookModel = App::resolve(Ebook::class);
    
            // Debug: Verifique se a instância do modelo foi criada corretamente
            // var_dump($ebookModel);
    
            // Salva o novo ebook no banco de dados
            $result = $ebookModel->addEbook($title, $author, $description, $price);
    
            // Debug: Verifique se a inserção no banco de dados foi bem-sucedida
            // echo "Ebook adicionado com sucesso.";
    
            // Redirecionar para a página de ebooks
            if ($result) {
                // Redirecionar para a página de ebooks
                header("Location: /ebooks");
                exit();
            } else {
                // Se ocorrer um erro, você pode redirecionar para uma página de erro ou exibir uma mensagem de erro na mesma página
                echo "Erro ao adicionar o ebook.";
            }
        }
    }

    public function listJson()
    {
        // Cria uma instância do modelo Ebook
        $ebookModel = App::resolve(Ebook::class);

        // Obtém todos os ebooks
        $ebooks = $ebookModel->getAllEbooks();

        // Define o cabeçalho da resposta como JSON
        header('Content-Type: application/json');

        // Retorna a lista de ebooks como JSON
        echo json_encode($ebooks);
    }
}
