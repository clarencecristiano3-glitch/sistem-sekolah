<?php
require_once './app/core/Router.php';

use App\Core\Router;

$Router = new Router();
// Register Routes
$router->add('GET','/students','StudentController','index');
$router->add('GET','/Students/create','StudentController','create');
$router->add('GET','/Students/{id}','StudentController','show');
$Router->run();

?>