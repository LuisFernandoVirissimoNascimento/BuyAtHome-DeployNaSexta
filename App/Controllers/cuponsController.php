<?php

namespace App\Controllers;

use Core\View;

class CuponsController extends Controller
{

    public function descontos()
    {
        View::render('lista_descontos');
    }
}