<?php
namespace Src\Controllers;

class HomeController
{
    public function __invoke()
    {
        $value = 'Hello World!';
        require_once __DIR__ . '/../../resource/views/home.php';
        die();
    }

}