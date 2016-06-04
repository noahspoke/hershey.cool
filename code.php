<?php
	require('db_info.php');

	define('DATABASE_NAME', $name);
	define('DATABASE_USER', $user);
	define('DATABASE_PASS', $pass);
	define('DATABASE_HOST', $host);
	include_once('class.DBPDO.php');

	if (!isset($_POST["code"])) {
		header("Location: ".$url_scheme."home.php");
	}
	else {
		$DB = new DBPDO();
		$code = $DB->fetch("SELECT * FROM code WHERE code = ?", trim($_POST["code"]));

		if ($code != false) {
			header("Location: ".$url_scheme."members.php");
		}
		else {
			header("Location: ".$url_scheme."home.php");
		}
	}
?>