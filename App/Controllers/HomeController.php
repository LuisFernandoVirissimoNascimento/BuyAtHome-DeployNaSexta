<?php

namespace App\Controllers;

use Core\View;

class HomeController extends Controller
{
    public function index()
    {
        $moedas = $_SESSION['user_moedas'] ?? 0;

        View::render('welcome');
    }
}
