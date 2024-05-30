<?php

declare(strict_types = 1);

use App\Controllers\AuthController;
use App\Controllers\HomeController;
use Slim\App;

return function (App $app) {
    $app->get(pattern:'/', callable: [HomeController::class, 'index']);

    $app->get(pattern: '/login', callable: [AuthController::class, 'loginView']);
    $app->get(pattern: '/register', callable: [AuthController::class, 'registerView']);
    $app->post(pattern: '/login', callable: [AuthController::class, 'logIn']);
    $app->post(pattern: '/register', callable: [AuthController::class, 'register']);
};
