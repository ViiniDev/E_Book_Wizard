<?php

require 'vendor/autoload.php';
require  'Models/Cart.php';
require  'Core/App.php';

use Models\Cart;
use PHPUnit\Framework\TestCase;
use Mockery as m;

class CartTest extends TestCase
{
    protected function tearDown(): void
    {
        m::close();
    }

    public function test_add_to_cart()
    {
        // Test data
        $userId = 1;
        $ebookId = 101;
        $quantity = 2;
        $ebookTitle = 'Test eBook';
        $ebookPrice = 9.99;

        // Criar um mock para a classe Database
        $mockDb = m::mock('Core\Database');

        // Mock da query para verificar item existente no carrinho
        $mockDb->shouldReceive('query')
            ->once()
            ->with('SELECT * FROM cart WHERE ebook_id = :ebook_id AND user_id = :user_id', [
                'ebook_id' => $ebookId,
                'user_id' => $userId
            ])
            ->andReturnSelf();
        
        // Mock do método find para simular que não há item existente no carrinho
        $mockDb->shouldReceive('find')
            ->once()
            ->andReturn(null);

        // Mock da query para inserir um novo item no carrinho
        $mockDb->shouldReceive('query')
            ->once()
            ->with('INSERT INTO cart (ebook_id, quantity, user_id, ebook_title, ebook_price) VALUES (:ebook_id, :quantity, :user_id, :ebook_title, :ebook_price)', [
                'ebook_id' => $ebookId,
                'quantity' => $quantity,
                'user_id' => $userId,
                'ebook_title' => $ebookTitle,
                'ebook_price' => $ebookPrice
            ])
            ->andReturn(true);

        // Instanciar a classe Cart com o mock Database
        $cart = new Cart($mockDb);

        // Testar o método addToCart
        $cart->addToCart($userId, $ebookId, $quantity, $ebookTitle, $ebookPrice);

        // Garantir que o método executa sem erros
        $this->assertTrue(true);
    }

    public function test_add_to_cart_existing_item()
    {
        // Test data
        $userId = 1;
        $ebookId = 101;
        $quantity = 2;
        $existingQuantity = 3;
        $newQuantity = $existingQuantity + $quantity;
        $ebookTitle = 'Test eBook';
        $ebookPrice = 9.99;

        // Criar um mock para a classe Database
        $mockDb = m::mock('Core\Database');

        // Mock da query para verificar item existente no carrinho
        $mockDb->shouldReceive('query')
            ->once()
            ->with('SELECT * FROM cart WHERE ebook_id = :ebook_id AND user_id = :user_id', [
                'ebook_id' => $ebookId,
                'user_id' => $userId
            ])
            ->andReturnSelf();
        
        // Mock do método find para simular um item existente no carrinho
        $mockDb->shouldReceive('find')
            ->once()
            ->andReturn(['quantity' => $existingQuantity]);

        // Mock da query para atualizar a quantidade do item existente no carrinho
        $mockDb->shouldReceive('query')
            ->once()
            ->with('UPDATE cart SET quantity = :quantity WHERE ebook_id = :ebook_id AND user_id = :user_id', [
                'quantity' => $newQuantity,
                'ebook_id' => $ebookId,
                'user_id' => $userId
            ])
            ->andReturn(true);

        // Instanciar a classe Cart com o mock Database
        $cart = new Cart($mockDb);

        // Testar o método addToCart
        $cart->addToCart($userId, $ebookId, $quantity, $ebookTitle, $ebookPrice);

        // Garantir que o método executa sem erros
        $this->assertTrue(true);
    }

    public function testRemoveFromCart()
    {
        // Dados de teste
        $userId = 1;
        $ebookId = 101;

        // Criar um mock para a classe Database
        $mockDb = m::mock('Core\Database');

        // Mock da query para remover item do carrinho
        $mockDb->shouldReceive('query')
            ->once()
            ->with('DELETE FROM cart WHERE ebook_id = :ebook_id AND user_id = :user_id', [
                'ebook_id' => $ebookId,
                'user_id' => $userId
            ])
            ->andReturn(true);

        // Instanciar a classe Cart com o mock Database
        $cart = new Cart($mockDb);

        // Testar o método removeFromCart
        $cart->removeFromCart($userId, $ebookId);

        // Garantir que o método executa sem erros
        $this->assertTrue(true);        

    }

    public function test_clear_cart()
    {
        // Dados de teste
        $userId = 1;

        // Criar um mock para a classe Database
        $mockDb = m::mock('Core\Database');

        // Mock da query para limpar o carrinho do usuário
        $mockDb->shouldReceive('query')
            ->once()
            ->with('DELETE FROM cart WHERE user_id = :user_id', [
                'user_id' => $userId
            ])
            ->andReturn(true);

        // Instanciar a classe Cart com o mock Database
        $cart = new Cart($mockDb);

        // Testar o método clearCart
        $cart->clearCart($userId);

        // Garantir que o método executa sem erros
        $this->assertTrue(true);
    }

    public function test_update_cart_item_quantity()
    {
        // Dados de teste
        $userId = 1;
        $ebookId = 101;
        $newQuantity = 5;

        // Criar um mock para a classe Database
        $mockDb = m::mock('Core\Database');

        // Mock da query para atualizar a quantidade do item no carrinho
        $mockDb->shouldReceive('query')
            ->once()
            ->with('UPDATE cart SET quantity = :quantity WHERE ebook_id = :ebook_id AND user_id = :user_id', [
                'quantity' => $newQuantity,
                'ebook_id' => $ebookId,
                'user_id' => $userId
            ])
            ->andReturn(true);

        // Instanciar a classe Cart com o mock Database
        $cart = new Cart($mockDb);

        // Testar o método updateCartItemQuantity
        $cart->updateCartItemQuantity($userId, $ebookId, $newQuantity);

        // Garantir que o método executa sem erros
        $this->assertTrue(true);
    }

    public function test_get_cart_quantity()
    {
        // Dados de teste
        $email = 'test@example.com';
        $userId = 1;
        $totalQuantity = 10;

        // Criar um mock para a classe Database
        $mockDb = m::mock('Core\Database');

        // Mock da query para buscar o usuário pelo email
        $mockDb->shouldReceive('query')
            ->once()
            ->with('SELECT * FROM users WHERE email = :email', [
                'email' => $email
            ])
            ->andReturnSelf();
        
        // Mock do método find para retornar o ID do usuário
        $mockDb->shouldReceive('find')
            ->once()
            ->andReturn(['id' => $userId]);

        // Mock da query para somar a quantidade de itens no carrinho do usuário
        $mockDb->shouldReceive('query')
            ->once()
            ->with('SELECT SUM(quantity) AS total_quantity FROM cart WHERE user_id = :user_id', [
                'user_id' => $userId
            ])
            ->andReturnSelf();

        // Mock do método get para retornar a soma da quantidade de itens no carrinho
        $mockDb->shouldReceive('get')
            ->once()
            ->andReturn([['total_quantity' => $totalQuantity]]);

        // Instanciar a classe Cart com o mock Database
        $cart = new Cart($mockDb);

        // Testar o método getCartQuantity
        $result = $cart->getCartQuantity($email);

        // Garantir que o método retorna a quantidade correta
        $this->assertEquals($totalQuantity, $result);
    }    
    
}
 