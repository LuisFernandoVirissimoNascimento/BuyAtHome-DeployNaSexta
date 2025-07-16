<?php

use Core\Router;

use App\Controllers\HomeController;
use App\Controllers\LoginController;

global $router;
$router = new Router();

$router->get('/', HomeController::class, 'index', 'homepage');
$router->get('/login', LoginController::class, 'login', 'loginpage');

$router->dispatch();