<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ebooks";

try {
    // Conexão com o banco de dados
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se é para adicionar um novo eBook
        if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['description']) && isset($_POST['price'])) {
            $title = $_POST['title'];
            $author = $_POST['author'];
            $description = $_POST['description'];
            $price = $_POST['price'];

            // Insere os dados do novo eBook no banco de dados
            $stmt = $conn->prepare("INSERT INTO ebooks (title, author, description, price) VALUES (:title, :author, :description, :price)");
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':author', $author);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);
            $stmt->execute();

            echo "Ebook adicionado com sucesso.";
        }
        // Verifica se é para atualizar a imagem de um eBook existente
        elseif (isset($_POST['ebook_id']) && isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
            $id = $_POST['ebook_id'];
            $image_data = file_get_contents($_FILES["image"]["tmp_name"]);

            // Verifica se o ID é válido
            if (filter_var($id, FILTER_VALIDATE_INT) === false) {
                echo "ID do ebook inválido.";
                exit;
            }

            // Atualiza a imagem no banco de dados
            $stmt = $conn->prepare("UPDATE ebooks SET image_data = :image_data WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':image_data', $image_data, PDO::PARAM_LOB);
            $stmt->execute();

            echo "Imagem do ebook atualizada com sucesso.";
        } else {
            echo "Erro: Por favor, preencha todos os campos obrigatórios.";
        }
    } else {
        echo "Erro: Método de requisição inválido.";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

$conn = null;
?>
