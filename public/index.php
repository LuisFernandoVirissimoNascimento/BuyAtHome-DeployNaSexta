<?php

use Core\Application;

require __DIR__ . '/../Core/Application.php';

// Inicia a aplicação
$app = new Application();
$app->bootstrap();
$app->run();
