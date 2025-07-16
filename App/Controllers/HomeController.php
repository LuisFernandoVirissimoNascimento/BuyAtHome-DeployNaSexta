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
        View::render('welcome');
    }
}