<?php

use Core\Router;

use App\Controllers\HomeController;

global $router;
$router = new Router();

$router->get('/', HomeController::class, 'index', 'homepage');

$router->dispatch();