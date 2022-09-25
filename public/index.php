<?php

use Router\Router;
use App\Exceptions\NotFoundException;


require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('DB_NAME', 'anime-list');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '');

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\FrontController@home');

$router->get('/admin/animes', 'App\Controllers\Admin\AnimeController@index');
$router->get('/admin/anime/add', 'App\Controllers\Admin\AnimeController@addAnime');
$router->post('/admin/anime/add', 'App\Controllers\Admin\AnimeController@storeAnime');
$router->get('/admin/anime/:id/edit', 'App\Controllers\Admin\AnimeController@editAnime');
$router->post('/admin/anime/:id/edit', 'App\Controllers\Admin\AnimeController@updateAnime');
$router->get('/admin/anime/:id/delete', 'App\Controllers\Admin\AnimeController@deleteAnime');

$router->get('/login', 'App\Controllers\User\UserController@login');
$router->post('/login', 'App\Controllers\User\UserController@loginPost');

$router->get('/register', 'App\Controllers\User\UserController@register');
$router->post('/register', 'App\Controllers\User\UserController@registerPost');



$router->get('/anime/add', 'App\Controllers\FrontController@addAnime');
$router->get('/anime/:id', 'App\Controllers\FrontController@showAnime');


$router->get('/animeList/:id', 'App\Controllers\FrontController@showAnimeList');

try {
    $router->run();
} catch (NotFoundException $e) {
    return $e->error404();
}
