<?php
namespace app\core;

class App{
	private $controller = 'Main';
	private $method = 'index';

	public function __construct(){
		
		$url = self::parseUrl(); 
		
		if(isset($url[0])){
			if(file_exists('app/controllers/' . $url[0] . '.php')){
				$this->controller = $url[0];
			}
			unset($url[0]);
		}
		$this->controller = 'app\\controllers\\' . $this->controller; 
		$this->controller = new $this->controller;

		if(isset($url[1])){
			if(method_exists($this->controller, $url[1])){
				$this->method = $url[1];
			}
			unset($url[1]);
		}

		$params = $url ? array_values($url) : [];
		call_user_func_array([ $this->controller, $this->method ], $params);
	}

	public static function parseUrl(){
		if(isset($_GET['url']))//get url exists
		{
			return explode('/', //return parts in an array, separated by /
				filter_var(	//remove non-URL characters and sequences
					rtrim($_GET['url'], '/'))
				,FILTER_SANITIZE_URL);
		}
	}


}