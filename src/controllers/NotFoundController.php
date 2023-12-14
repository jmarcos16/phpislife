<?php
namespace Src\controllers;

class NotFoundController
{
    public function __invoke()
    {
        echo '404';                
        die();
    }
}