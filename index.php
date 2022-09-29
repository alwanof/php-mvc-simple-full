<?php
//php-mvc-simple-start
$uri = $_SERVER['REQUEST_URI'];

$routes = require 'routers.php';


if (array_key_exists($uri, $routes)) {
    require 'controller/' . $routes[$uri];
}
