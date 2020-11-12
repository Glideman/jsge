<?php

class Application {



	public $user;
	public $pageAttributes;
	public $currentController;
	public $currentAction;
	public $request;



	function __construct() {
		$this->user = null;
		$this->pageAttributes = "";
		$this->currentController = "";
		$this->currentAction = "";
		$this->request = null;
	}



	public function start() {
		session_start();

		$this->request = new Request();
		$this->request->process();

		if(isset($_SESSION['user'])) $this->user = $_SESSION['user'];
		else $_SESSION['user'] = $this->user;


		// контроллер и действие по умолчанию
		$controllerName = 'main';
		$actionName = 'run';


		// разбиваем ЮРИ
		$url = explode('?', $_SERVER['REQUEST_URI']);
		$routes = explode('/', $url[0]);


		// получаем имя контроллера
		if ( !empty($routes[1]) )
			$controllerName = strtolower($routes[1]);


		// получаем имя экшена
		if ( !empty($routes[2]) )
			$actionName = strtolower($routes[2]);


		// подключаем файл с классом контроллера
		$controllerPath = 'controllers/'.$controllerName.'.php';

		if(!file_exists($controllerPath))
			$this->shutdown(404, 'Not found');

		require_once $controllerPath;


		// создаем контроллер
		$controller = new $controllerName;


		// получаем экшн
		if(!method_exists($controller, $actionName))
			$this->shutdown(404, 'Not found');


		$this->currentController = $controllerName;
		$this->currentAction = $actionName;


		// вызываем
		$controller->$actionName();
	}



	public function shutdown($code=500, $msg='Internal server error') {
		http_response_code($code);
		include 'views/app_shutdown.php';
		exit(0);
	}


}