<?php

use Router\Router;
use App\Controllers\FrontController;

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\FrontController@home');
$router->get('/home', 'App\Controllers\FrontController@home');

$router->get('/admin/users', 'App\Controllers\AdminController@viewUsers');

$router->run();

