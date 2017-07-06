<?php 

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Router, Request};

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());

//die(var_dump($app));


// $database = require 'core/bootstrap.php';
// $router = new Router;
// require 'routes.php';
//$uri = trim($_SERVER['REQUEST_URI'], '/');
//require $router->direct($uri);

//var_dump($_SERVER); $_POST\$_GET