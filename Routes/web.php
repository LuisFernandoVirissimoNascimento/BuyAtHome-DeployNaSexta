<?php

use Core\Router;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\CuponsController;
use App\Controllers\MoedasController;
use App\Controllers\ProductController;

global $router;
$router = new Router();

$router->get('/', HomeController::class, 'index', 'homepage');
$router->get('/', HomeController::class, 'welcome', 'welcome');
$router->get('/login', LoginController::class, 'login', 'loginpage');
$router->post('/login', LoginController::class, 'autenticar', 'login.submit');
$router->get('/descontos', CuponsController::class, 'descontos', 'lista_descontos');
$router->get('/product', ProductController::class, 'product', 'products');
$router->get('/logout', LoginController::class, 'logout', 'logout');


$router->get('/diaria', MoedasController::class, 'diaria');
$router->post('/comprar-desconto', MoedasController::class, 'comprarDesconto');


$router->dispatch();
