<?php


require_once '../vendor/autoload.php';

use App\API\Core\Router;
use App\API\Core\Container;


$router = new Router();

//dump($router->getRoute());
$route = $router->getRoute();

$container = new Container();

$controller = $container->get($route['route']['controller']);
//dump($controller);

$uriVars = $route['uriVars'];

$controller->{$route['route']['method']}($uriVars);

//dump($uriVars);


$dotenv = $container->get('core.dotenv');
//dump($dotenv->get('db_host'));

$database = $container->get('core.database');

//dump($database->connect());
