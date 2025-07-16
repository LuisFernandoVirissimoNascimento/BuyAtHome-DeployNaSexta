<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\MoedasModel; 
use Core\View;

class LoginController
{
    public function login()
    {
        if (session()->has('usuario')) {
            redirect()->route('welcome');
            exit;
        }
        return View::render('login');
    }

    public function autenticar()
    {
        $cpf = filter_var($_POST['CPF'], FILTER_DEFAULT) ?? '';
        $senha = filter_var($_POST['Senha'], FILTER_DEFAULT) ?? '';

        $usuarioModel = new User();
        $usuario = $usuarioModel->findBy('cpf', $cpf);

        if (is_null($usuario->getData())) {
            session()->flash('error', 'CPF ou senha inválidos.');
            redirect()->route('loginpage');
            exit;
        }

        if (password_verify($senha, $usuario->getData()['senha'])) {
            $userData = $usuario->getData();

            $modelMoedas = new MoedasModel();
            $moedasInfo = $modelMoedas->getMoedasInfo($userData['id_cliente']);

            if (!$moedasInfo) {
                $modelMoedas->criarRegistro($userData['id_cliente']);
                $moedasInfo = $modelMoedas->getMoedasInfo($userData['id_cliente']);
            }

            $moedas = $moedasInfo['moedas'] ?? 0;
            $ultima = $moedasInfo['ultima_moeda'] ? new \DateTime($moedasInfo['ultima_moeda']) : null;

            date_default_timezone_set('America/Sao_Paulo'); 
            $agora = new \DateTime();
            $horaLimite = (clone $agora)->setTime(12, 0, 0);

            $jaRecebeuHoje = $ultima && $ultima->format('Y-m-d') === $agora->format('Y-m-d');

            // Só adiciona moeda se passou das 12h e não recebeu hoje
            if ($agora >= $horaLimite && !$jaRecebeuHoje) {
                $moedas += 1;
                $success = $modelMoedas->atualizarMoedas(
                    $userData['id_cliente'],
                    $moedas,
                    $agora->format('Y-m-d H:i:s')
                );

                if ($success && !session()->has('moeda_login_hoje')) {
                    session()->flash('moeda_login', 'Você ganhou 1 moeda por acessar hoje!');
                    session()->set('moeda_login_hoje', $agora->format('Y-m-d'));
                    session()->set('hora_moeda', $agora->format('H:i:s')); // só para console
                    $ultima = $agora;
                }
            }

            $userData['moedas'] = $moedas;
            $userData['ultima_moeda'] = $ultima ? $ultima->format('Y-m-d H:i:s') : null;

            session()->set('usuario', $userData);

            redirect()->route('welcome');
            exit;
        }

        session()->flash('error', 'CPF ou senha inválidos.');
        redirect()->route('loginpage');
        exit;
    }

    public function logout()
    {
        session()->clear();
        redirect()->route('loginpage');
        exit;
    }
}
