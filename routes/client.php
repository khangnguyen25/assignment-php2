<?php

use Asm\Controllers\Client\AuthController;
use Asm\Controllers\Client\HomeController;
use Asm\Controllers\Client\ProductController;

$router->get('/', HomeController::class . '@index');
$router->post('/auth/handle-login',    AuthController::class . '@login');
$router->get('/auth/logout',           AuthController::class . '@logout');
$router->get('/auth/login',            AuthController::class . '@showFormLogin');



$router->mount('/client', function () use ($router) {


    $router->mount('/products', function () use ($router) {
        $router->get('/{id}/show', [ProductController::class, 'show']);
    });
});
