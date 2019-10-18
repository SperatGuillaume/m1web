<?php


require_once '../vendor/autoload.php';

use App\Front\Core\Router;
use App\Front\Core\Container;


$router = new Router();

//dump($router->getRoute());
$route = $router->getRoute();

$container = new Container();

$controller = $container->get($route['route']['controller']);
//dump($controller);

$uriVars = $route['uriVars'];

$controller->{$route['route']['method']}($uriVars);

//dump($uriVars);

