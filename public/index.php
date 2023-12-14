<?php

use Src\controllers\HomeController;
use Src\controllers\PostController;

require __DIR__ . '/../vendor/autoload.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$routes = [
    'posts' => HomeController::class,
    'posts/{markdown}' => PostController::class,
];

$uri = explode('/', $uri);

// dd($uri);

foreach ($routes as $route => $action) {
    if ($route == $uri[1] && $method === 'GET' && empty($uri[2])) {
        return new $action;        
    }elseif ($route == $uri[1] && $method === 'GET' && !empty($uri[2])) {
        dd($uri[2]);
        $controller = new $action;
        $controller->show($uri[2]);
    }else{
        echo '404';
    }
    // else new Src\controllers\ErrorController;
}
