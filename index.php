<?php

require 'application/lib/Dev.php';

use application\core\Router;


spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class . '.php');
    if (file_exists($path)) { // Если файл существует - подключить
        require $path;
    }
});
 
session_start();

$router = new Router;
$router->run();