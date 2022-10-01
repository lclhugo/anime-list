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
define('PATH', 'anime-list.test');

// $router = array_key_exists('url', $_GET) ? new Router($_GET['url']) : new Router('home');

$router = new Router($_GET['url'] ?? 'home');


$router->get('/', 'App\Controllers\Public\FrontController@home');
$router->get('/home', 'App\Controllers\Public\FrontController@home');

$router->get('/login', 'App\Controllers\User\UserController@login');
$router->post('/login', 'App\Controllers\User\UserController@loginPost');
$router->get('/register', 'App\Controllers\User\UserController@register');
$router->post('/register', 'App\Controllers\User\UserController@registerPost');
$router->get('/logout', 'App\Controllers\User\UserController@logout');

$router->get('/admin/animes', 'App\Controllers\Admin\AdminAnimeController@index');
$router->get('/admin/anime/add', 'App\Controllers\Admin\AdminAnimeController@addAnime');
$router->post('/admin/anime/add', 'App\Controllers\Admin\AdminAnimeController@storeAnime');
$router->get('/admin/anime/:id/edit', 'App\Controllers\Admin\AdminAnimeController@editAnime');
$router->post('/admin/anime/:id/edit', 'App\Controllers\Admin\AdminAnimeController@updateAnime');
$router->get('/admin/anime/:id/delete', 'App\Controllers\Admin\AdminAnimeController@deleteAnime');

$router->get('/admin/users', 'App\Controllers\Admin\AdminUserController@index');
$router->get('/admin/dashboard', 'App\Controllers\Admin\AdminController@dashboard');

$router->get('/anime/:id', 'App\Controllers\Public\PublicAnimeController@showAnime');

$router->get('/anime/:id/add', 'App\Controllers\User\ListController@addToList');
$router->get('/anime/:id/delete', 'App\Controllers\User\ListController@deleteFromList');

$router->get('/animes', 'App\Controllers\Public\PublicAnimeController@showAllAnimes');

$router->get('/list/:id', 'App\Controllers\User\ListController@showUserList');




try {
    $router->run();
} catch (NotFoundException $e) {
    return $e->error404();
}