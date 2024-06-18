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

    public function test_get_user_id()
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
        $user = new User($mockDb);

        // Testa o método get_User_Id
        $userId = $user->get_User_Id();
        
        // Assegura que o ID do usuário é o esperado
        $this->assertEquals(1, $userId);
    }
}