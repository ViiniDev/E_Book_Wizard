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
        if (isset($_POST['ebook_id'])) {
            $id = $_POST['ebook_id'];

            // Verifica se o ID é válido
            if (filter_var($id, FILTER_VALIDATE_INT) === false) {
                echo json_encode(['error' => 'ID do ebook inválido.']);
                exit;
            }

            // Deleta o ebook do banco de dados
            $stmt = $conn->prepare("DELETE FROM ebooks WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            echo json_encode(['success' => 'Ebook excluído com sucesso.']);
        } else {
            echo json_encode(['error' => 'ID do ebook não fornecido.']);
        }
    } else {
        echo json_encode(['error' => 'Método de requisição inválido.']);
    }
} catch (PDOException $e) {
    echo json_encode(['error' => "Erro: " . $e->getMessage()]);
}

$conn = null;

