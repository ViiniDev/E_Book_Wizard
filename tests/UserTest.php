<?php

require 'vendor/autoload.php';
require  'Models/User.php';

use Models\User;
use PHPUnit\Framework\TestCase;
use Mockery as m;

class UserTest extends TestCase
{
    protected function tearDown(): void
    {
        m::close();
    }

    public function testGetUserId()
    {
        // Simula os dados do usuário na sessão
        $_SESSION['user'] = ['email' => 'test@example.com'];

        // Cria um mock para a classe Database
        $mockDb = m::mock('Core\Database');

        // Configura o comportamento esperado do mock
        $mockDb->shouldReceive('query')
            ->once()
            ->with('SELECT * FROM users WHERE email = :email', ['email' => 'test@example.com'])
            ->andReturnSelf();

        $mockDb->shouldReceive('find')
            ->once()
            ->andReturn(['id' => 1]);

        // Instancia a classe User com o mock de Database
        $user = new User();
        $user->setDatabase($mockDb); // Injeta o mock diretamente

        // Testa o método get_User_Id
        $userId = $user->get_User_Id();
        
        // Assegura que o ID do usuário é o esperado
        $this->assertEquals(1, $userId);
    }
}



//oh God, looks like its working... the map the leads to you, the map the leads to you
//and nothing i can do