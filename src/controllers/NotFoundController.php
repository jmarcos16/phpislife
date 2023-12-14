<?php
namespace Src\Controllers;

class NotFoundController
{
    public function __invoke()
    {
        echo '404';                
        die();
    }
}