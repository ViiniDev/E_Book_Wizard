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

    public function test_creat()
    {
        // Dados de teste
        $email = 'test@example.com';
        $senha = 'password123';

        // Cria um mock para a classe Database
        $mockDb = m::mock('Core\Database');

        // Configura o comportamento esperado do mock
        $mockDb->shouldReceive('query')
            ->once()
            ->with('INSERT INTO users (email, password) VALUES (:email, :password)', m::on(function($arg) use ($email, $senha) {
                return $arg['email'] === $email && password_verify($senha, $arg['password']);
            }))
            ->andReturn(true);

        // Instancia a classe Usuario com o mock de Database
        $usuario = new User($mockDb);

        // Testa o método criar
        $result = $usuario->create($email, $senha);

        // Assegura que a criação do usuário foi bem-sucedida
        $this->assertTrue($result);
    }

    public function testFindByEmail()
    {
        // Test data
        $email = 'test@example.com';
        $expectedUser = [
            'id' => 1,
            'email' => 'test@example.com',
            'password' => 'hashed_password'
        ];

        // Create a mock for the Database class
        $mockDb = m::mock('Core\Database');

        // Configure the expected behavior of the mock
        $mockDb->shouldReceive('query')
            ->once()
            ->with('SELECT * FROM users WHERE email = :email', ['email' => $email])
            ->andReturnSelf();

        $mockDb->shouldReceive('find')
            ->once()
            ->andReturn($expectedUser);

        // Instantiate the User class with the mock Database
        $user = new User($mockDb);

        // Test the findByEmail method
        $result = $user->findByEmail($email);

        // Ensure that the returned user data is as expected
        $this->assertEquals($expectedUser, $result);
    }   

}