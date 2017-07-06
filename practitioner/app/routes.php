<?php 

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
//$router->get('about/culture', 'controllers@about-culture');
$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

//var_dump($router->routes);

// $router->define([
// 	'' => 'controllers/index.php',
// 	'about' => 'controllers/about.php',
// 	'about/culture' => 'controllers/about-culture.php',
// 	'contact' => 'controllers/contact.php',
// 	'names' => 'controllers/add-name.php' // only for POST type
// ]);