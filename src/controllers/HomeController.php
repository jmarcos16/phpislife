<?php
namespace Src\controllers;

class HomeController
{
    public function __invoke()
    {
        echo 'HomeController';                
        die();
    }

}