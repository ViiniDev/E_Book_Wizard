<?php

namespace Core;

use Core\App;
use Models\User;

class Authenticator
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = App::resolve(User::class);
    }

    public function attempt($email, $password)
    {
        $user = $this->userModel->findByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $this->login($user); // Passa o usuário inteiro para o método login
            return true;
        }

        return false;
    }

    public function login($user)
    {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'email' => $user['email'],
            'is_admin' => $user['is_admin'] // Adicionando o campo is_admin à sessão
        ];
        
        // Se o usuário for admin, define 'is_admin' como true na sessão
        if ($user['email'] == 'admin@admin.com') {
            $_SESSION['user']['is_admin'] = true;
        } else {
            $_SESSION['user']['is_admin'] = false;
        }
        
        session_regenerate_id(true);
    }

    public function logout()
    {
        Session::destroy();
    }
}
