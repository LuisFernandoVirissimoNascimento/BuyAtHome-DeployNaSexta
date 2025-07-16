<?php

namespace App\Controllers;

use Core\View;

class HomeController extends Controller
{
    public function index()
    {
        View::render('');
    }

    public function welcome()
    {
        $moedas = $_SESSION['user_moedas'] ?? 0;

        View::render('welcome');
    }
}
