<?php

$router = $di->getRouter();

$router->add('/user', [
    'controller' => 'user',
    'action'     => 'index'
]);

$router->add('/user/create', [
    'controller' => 'user',
    'action'     => 'create'
]);

$router->add('/task/{userId:[0-9]+}', [
    'controller' => 'task',
    'action'     => 'index'
]);

$router->add('/task/create/{userId:[0-9]+}', [
    'controller' => 'task',
    'action'     => 'create'
]);


$router->add('/products', [
    'controller' => 'products',
    'action'     => 'index'
]);

$router->add('/products/create', [
    'controller' => 'products',
    'action'     => 'create'
]);


$router->handle($_SERVER['REQUEST_URI']);
