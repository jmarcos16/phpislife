<?php
namespace Src\config;

class Routes
{
    
    public function match($uri, $requestType)
    {
        $routes = include __DIR__ . '/../../routes/web.php';
        $routes = $routes[$requestType];
        foreach ($routes as $route => $action) {
            if ($route == $uri) {
                return $action;
            }
        }
        return false;
    }

}
