<?php

namespace App\Controllers;

use Core\View;

class LoginController extends Controller
{

    public function login()
    {
        View::render('login');
    }
}