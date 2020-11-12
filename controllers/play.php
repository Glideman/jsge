<?php

class Play extends Controller {



	function __construct() {
		parent::__construct();
	}



	function run() {
		$this->view->generate('play.php', null);
	}


}