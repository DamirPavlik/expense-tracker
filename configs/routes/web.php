<?php

declare(strict_types = 1);

use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;
use Slim\App;

return function (App $app) {
    $app->get(pattern:'/', callable: [HomeController::class, 'index'])->add(AuthMiddleware::class);

    $app->get(pattern: '/login', callable: [AuthController::class, 'loginView'])->add(GuestMiddleware::class);
    $app->get(pattern: '/register', callable: [AuthController::class, 'registerView'])->add(GuestMiddleware::class);
    $app->post(pattern: '/login', callable: [AuthController::class, 'logIn'])->add(GuestMiddleware::class);
    $app->post(pattern: '/register', callable: [AuthController::class, 'register'])->add(GuestMiddleware::class);

    $app->post(pattern: '/logout', callable: [AuthController::class, 'logOut'])->add(AuthMiddleware::class);
};
