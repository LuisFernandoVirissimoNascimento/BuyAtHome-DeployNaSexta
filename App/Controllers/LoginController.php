<?php

namespace App\Controllers;

use App\Models\User;
use Core\View;

class LoginController
{
    public function login()
    {
        return View::render('login');
    }

    public function autenticar()
    {
        
        $cpf = filter_var($_POST['CPF'], FILTER_DEFAULT) ?? ''; //Validação de segurança contra SQL Injection
        $senha = filter_var($_POST['Senha'], FILTER_DEFAULT) ?? ''; //Validação de segurança contra SQL Injection

        $usuarioModel = new User();
        $usuario = $usuarioModel->findBy('cpf', $cpf);

        if(is_null($usuario->getData())){
            session()->flash('error', 'CPF ou senha inválidos.');
            redirect()->route('loginpage');
        }
        
        if (password_verify($senha, $usuario->getData()['senha'])) {
            session()->set('usuario', $usuario->getData());
            redirect()->route('welcome');
        } else {
            session()->flash('error', 'CPF ou senha inválidos.');
            redirect()->route('loginpage');
        }
    }
}

