<?php

require_once 'vendor/autoload.php';

use App\Route\Router;

header("Access-Control-Allow-Origin: *"); //permite requisição de outros servidores
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$requestUri = $_SERVER['REQUEST_URI'];

$router = new Router;
$router->run($requestUri);