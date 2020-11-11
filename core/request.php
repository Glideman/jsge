<?php

class Request {



	public $attributes = [];



	public function process() {
		foreach ($_GET as $key => $val) {
			$key = htmlentities($key, ENT_QUOTES | ENT_HTML401);
			$val = htmlentities($val, ENT_QUOTES | ENT_HTML401);
			$this->attributes[$key] = $val;}

		foreach ($_POST as $key => $val) {
			$key = htmlentities($key, ENT_QUOTES | ENT_HTML401);
			$val = htmlentities($val, ENT_QUOTES | ENT_HTML401);
			$this->attributes[$key] = $val;}
	}



	public function getAttributesStr() {
		$result = '';
		foreach ($this->attributes as $key => $value){
			$result .= $key . "=" . $value . "&";}
		return substr($result, 0, -1);
	}


}