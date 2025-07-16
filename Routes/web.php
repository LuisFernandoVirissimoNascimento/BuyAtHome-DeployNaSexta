<?php

use Core\Router;
use App\Controllers\HomeController;
use App\Controllers\MoedasController;

global $router;
$router = new Router();

$router->get('/', HomeController::class, 'index', 'homepage');
$router->get('/diaria', MoedasController::class, 'diaria');

$router->dispatch();
