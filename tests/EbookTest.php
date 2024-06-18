<?php

require 'vendor/autoload.php';

use Models\Ebook;
use PHPUnit\Framework\TestCase;
use Mockery as m;
require  'Models/Ebook.php';

class EbookTest extends TestCase
{
    protected function tearDown(): void
    {
        m::close();
    }

    public function test_get_all_ebooks()
    {
        // Dados de teste
        $ebooks = [
            ['id' => 1, 'title' => 'Ebook 1', 'author' => 'Author 1'],
            ['id' => 2, 'title' => 'Ebook 2', 'author' => 'Author 2']
        ];

        // Criar um mock para a classe Database
        $mockDb = m::mock('Core\Database');

        // Mock da query para selecionar todos os ebooks ordenados por título
        $mockDb->shouldReceive('query')
            ->once()
            ->with('SELECT * FROM ebooks ORDER BY title ASC')
            ->andReturnSelf();

        // Mock do método get para retornar os ebooks de teste
        $mockDb->shouldReceive('get')
            ->once()
            ->andReturn($ebooks);

        // Instanciar a classe Ebook com o mock Database
        $ebook = new Ebook($mockDb);

        // Testar o método getAllEbooks
        $result = $ebook->getAllEbooks();

        // Garantir que o resultado é o esperado
        $this->assertEquals($ebooks, $result);
    }

    public function test_search_ebooks()
    {
        // Dados de teste
        $query = 'Test';
        $searchQuery = '%' . $query . '%';
        $ebooks = [
            ['id' => 1, 'title' => 'Test Ebook 1', 'author' => 'Author 1'],
            ['id' => 2, 'title' => 'Another Test Ebook', 'author' => 'Author 2']
        ];

        // Criar um mock para a classe Database
        $mockDb = m::mock('Core\Database');

        // Mock da query para pesquisar ebooks
        $mockDb->shouldReceive('query')
            ->once()
            ->with('SELECT * FROM ebooks WHERE title LIKE :query OR author LIKE :query', [
                'query' => $searchQuery
            ])
            ->andReturnSelf();

        // Mock do método get para retornar os ebooks de teste
        $mockDb->shouldReceive('get')
            ->once()
            ->andReturn($ebooks);

        // Instanciar a classe Ebook com o mock Database
        $ebook = new Ebook($mockDb);

        // Testar o método searchEbooks
        $result = $ebook->searchEbooks($query);

        // Garantir que o resultado é o esperado
        $this->assertEquals($ebooks, $result);
    }

    public function testGetEbookById()
    {
        // Dados de teste
        $ebookId = 1;
        $ebook = ['id' => 1, 'title' => 'Ebook 1', 'author' => 'Author 1'];

        // Criar um mock para a classe Database
        $mockDb = m::mock('Core\Database');

        // Mock da query para selecionar o ebook pelo id
        $mockDb->shouldReceive('query')
            ->once()
            ->with('SELECT * FROM ebooks WHERE id = :id', [
                'id' => $ebookId
            ])
            ->andReturnSelf();

        // Mock do método find para retornar o ebook de teste
        $mockDb->shouldReceive('find')
            ->once()
            ->andReturn($ebook);

        // Instanciar a classe Ebook com o mock Database
        $ebookModel = new Ebook($mockDb);

        // Testar o método getEbookById
        $result = $ebookModel->getEbookById($ebookId);

        // Garantir que o resultado é o esperado
        $this->assertEquals($ebook, $result);
    }    
    
}