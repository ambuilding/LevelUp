<?php

namespace App\Core;

class Router {

	public $routes = [
	    'GET' => [],
	    'POST' => []
	];

	public static function load($file)
	{
		$router = new static;
		require $file;
		return $router;
	}

	public function get($uri, $controller)					
	{
		$this->routes['GET'][$uri] = $controller;
	}

	public function post($uri, $controller)					
	{
		$this->routes['POST'][$uri] = $controller;
	}

	public function direct($uri, $requestType)
	{
		//die(var_dump($uri, $requestType));

		if (array_key_exists($uri, $this->routes[$requestType])) {
			//PagesController@home
			//die($this->routes[$requestType][$uri]);
			//var_dump(...explode('@', 'Pages@home'));
			return $this->callAction(
				...explode('@', $this->routes[$requestType][$uri])
			);
		}

		throw new Exception('No route define for this URI.');	
	}

	protected function callAction($controller, $action) {

		$controller = "App\\Controllers\\{$controller}";
		//die($controller);
		$controller = new $controller;
		//die(var_dump($controller, $action));

		if (! method_exists($controller, $action)) {
			throw new Exception(
				"{$controller} doesn't respond to the {$action} action."
			);
		}

		return $controller->$action();
	}

	// public function define($routes)
	// {
	// 	$this->routes = $routes;
	// }
}