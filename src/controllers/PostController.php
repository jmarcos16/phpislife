<?php
namespace Src\Controllers;

class PostController
{
    public function __invoke(string $params)
    {
        echo 'dwdadw' . $params;                
        die();
    }
}