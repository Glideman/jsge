<?php

class Model {



	public static $db = null;



	public static function connect() {
		global $db_host,
			   $db_user,
			   $db_pass,
			   $db_name;

		$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
		if(!$db) return null;

		$db->query("SET character_set_results = 'utf8'");

		Model::$db = $db;
		return $db;
	}



	public static function database() {
		return Model::$db;
	}


}