<?php

class Main extends Controller {



	function __construct() {
		parent::__construct();
	}



	function run() {
		$this->view->generate('main.php', 'template.php');
	}


}