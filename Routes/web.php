<?php

use Core\Router;

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\CuponsController;

global $router;
$router = new Router();

$router->get('/', HomeController::class, 'index', 'homepage');
$router->get('/', HomeController::class, 'welcome', 'welcome');
$router->get('/login', LoginController::class, 'login', 'loginpage');
$router->post('/login', LoginController::class, 'autenticar', 'login.submit');
$router->get('/descontos', CuponsController::class, 'descontos', 'lista_descontos');



$router->dispatch();