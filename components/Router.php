<?php

class Router
{
	private $routes;
	
	CONST PATH_ROUTERS		= ROOT . '/application/config/routers.php';
	CONST PATH_CONTROLLERS	= ROOT . '/application/controllers/';
	
	public function __construct()
	{
		$this->routes = include self::PATH_ROUTERS;
	}
	
	public function run()
	{
		$url = $this->getReguestUrl();
		foreach ($this->routes as $urlKeyPattern => $urlPath) {
			if (preg_match('~' . $urlKeyPattern . '~', $url)) {
				$segments = explode('/', $urlPath);
				$controllerName = ucfirst(array_shift($segments)) . 'Controller';
				$actionName = 'action' . ucfirst(array_shift($segments));
				
				$controllerFile = self::PATH_CONTROLLERS . $controllerName . '.php';
				if (file_exists($controllerFile)) {
					include_once $controllerFile;
				}
				
				$controller = new $controllerName;
				$result = $controller->$actionName();
				if ($result != null) {
					break;
				}
			}
		}
	}
	
	/**
	 * Return reguest string
	 * @return string|null
	 */
	private function getReguestUrl()
	{
		return !empty($_SERVER['REQUEST_URI']) ? trim($_SERVER['REQUEST_URI']) : null;
	}
}