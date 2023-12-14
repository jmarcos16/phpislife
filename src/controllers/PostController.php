<?php
namespace Src\controllers;

class PostController
{
    public function __invoke(string $params)
    {
        echo 'dwdadw' . $params;                
        die();
    }
}