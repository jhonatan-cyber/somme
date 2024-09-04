<?php

use app\controllers\rol;
use app\controllers\home;
use Bramus\Router\Router;

$router = new Router();



$home = new home();
$rol=new rol();

/*-------------Home--------------*/
$router->get('/', [$home, 'index']);

/*-------------Rol--------------*/
$router->get('roles', [$rol, 'index']);
$router->get('getRoles',[$rol, 'getRoles']);

$router->run();
