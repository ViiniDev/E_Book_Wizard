<?php

namespace Models;

use Core\App;
use Core\Database;

class Ebook
{
    protected $db;

    public function __construct($db = null)
    {
        $this->db = $db ?: App::resolve(Database::class);
    }

    public function getAllEbooksByTitle()
    {
        return $this->db->query('SELECT * FROM ebooks ORDER BY title ASC')->get();
    }

    public function getAllEbooksByLastAdded()
    {
        return $this->db->query('SELECT * FROM ebooks ORDER BY id DESC')->get();
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
}
