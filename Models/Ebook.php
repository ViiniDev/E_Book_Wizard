<?php

namespace Models;

use Core\App;
use Core\Database;

class Ebook
{
    protected $db;

    public function __construct()
    {
        $this->db = App::resolve(Database::class);
    }

    public function getAllEbooks()
    {
        return $this->db->query('SELECT * FROM ebooks ORDER BY title ASC')->get();
    }

    public function searchEbooks($query)
    {
        $searchQuery = '%' . $query . '%';
        return $this->db->query('SELECT * FROM ebooks WHERE title LIKE :query OR author LIKE :query', ['query' => $searchQuery])->get();
    }

    public function getEbookById($id)
    {
        return $this->db->query('SELECT * FROM ebooks WHERE id = :id', ['id' => $id])->find();
    }
    public function addEbook($title, $author, $description, $price)
    {
    // Verificar se todos os campos obrigatórios estão preenchidos
    if (empty($title) || empty($author) || empty($description) || empty($price)) {
        echo "Por favor, preencha todos os campos obrigatórios.";
        return false;
    }

    // Validar o formato do preço
    if (!is_numeric($price)) {
        echo "O preço deve ser um valor numérico.";
        return false;
    }

    // Sanitizar os dados antes de inserir no banco de dados
    $title = htmlspecialchars($title);
    $author = htmlspecialchars($author);
    $description = htmlspecialchars($description);
    $price = floatval($price);

    // Preparar a consulta SQL
    $sql = 'INSERT INTO ebooks (title, author, description, price) VALUES (:title, :author, :description, :price)';
    $params = [
        'title' => $title,
        'author' => $author,
        'description' => $description,
        'price' => $price,
    ];

    // Debug: Exibir a consulta SQL e os parâmetros
    // var_dump($sql, $params);

    // Executar a consulta SQL
    $result = $this->db->query($sql, $params);

    // Verificar se a consulta foi executada com sucesso
    if ($result) {
        echo "Inserção bem-sucedida.";
        return true; // Inserção bem-sucedida, retornar true
    } else {
        echo "Erro ao inserir no banco de dados.";
        // Debug: Exibir mensagem de erro do banco de dados, se houver
        // var_dump($this->db->error());
        return false; // Inserção falhou, retornar false
    }
    }

}
