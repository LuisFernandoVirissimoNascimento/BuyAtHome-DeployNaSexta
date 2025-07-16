<?php

namespace App\Controllers;

use Core\Request;
use Core\View;

class Controller
{
    // public $request;
    // $request = new Request();
    // $this->request = $request;

    public function __construct() {
        if (!session()->has('usuario')) {
            redirect()->route('loginpage');
        }
    }

    public static function errorPage()
    {
        http_response_code(404);
        View::render('404');
    }

}