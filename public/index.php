<?php

use Src\Controllers\HomeController;
use Src\Controllers\PostController;
use Src\Controllers\NotFoundController;

require __DIR__ . '/../vendor/autoload.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$routes = [
    'posts' => HomeController::class,
    'posts/{markdown}' => PostController::class,
    'about' => HomeController::class,
];

$uri = explode('/', $uri);


foreach ($routes as $route => $action) {
    if ($route == $uri[1] && $method === 'GET' && empty($uri[2])) {
        $controller = new $action();
        $controller();
    } elseif ($route == $uri[1] . '/{markdown}' && $method === 'GET' && !empty($uri[2])) {
        $controller = new $action();
        $controller($uri[2]);
    }
}

$controller = new NotFoundController();
$controller();