<?php

use Core\Router;

use App\Controllers\HomeController;
use App\Controllers\CuponsController;

global $router;
$router = new Router();

$router->get('/', HomeController::class, 'index', 'homepage');
$router->get('/descontos', CuponsController::class, 'descontos', 'lista_descontos');

$router->dispatch();