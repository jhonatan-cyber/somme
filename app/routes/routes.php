<?php

use Bramus\Router\Router;

$router = new Router();

use app\controllers\home;

$home = new home();

/*-------------Home--------------*/
$router->get('/', [$home, 'index']);
$router->run();
