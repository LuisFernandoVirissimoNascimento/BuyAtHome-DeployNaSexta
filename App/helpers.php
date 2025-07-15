<?php

use Core\Session;
use Core\Redirector;
use Core\Router;

function route(string $name, array $params = []): ?string
{
    $router = router(); // função helper que retorna o Router singleton

    $url = $router->route($name);

    if (!$url) {
        return null;
    }

    // Substitui os parâmetros no estilo {id}, {slug}
    foreach ($params as $key => $value) {
        $url = str_replace("{" . $key . "}", $value, $url);
    }

    return $url;
}

function session(): Session
{
    global $session;
    return $session;
}

function redirect(): Redirector
{
    return new Redirector();
}

function router(): Router
{
    global $router;
    return $router;
}