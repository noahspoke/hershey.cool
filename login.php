<?php
	require('db_info.php');
	require('medoo.php');
	define('DATABASE_NAME', $name);
	define('DATABASE_USER', $user);
	define('DATABASE_PASS', $pass);
	define('DATABASE_HOST', $host);
	include_once('class.DBPDO.php');

	$username = trim($_POST["name"]);
	$raw_password = trim($_POST["password"]);
	$salt = sha1(md5($username));
	$hashed_password = md5($raw_password.$salt);

	$I_DB = new medoo([
			'database_type' => 'mysql',
    		'database_name' => 'showcase',
    		'server' => $host,
    		'username' => $user,
    		'password' => $pass,
    		'charset' => 'utf8'
	]);

	$DB = new DBPDO();

	$query = "SELECT * FROM users WHERE name='".$username."' AND password='".$hashed_password."'";
	$user = $DB->fetch($query);

	if ($user == false) {
		//create account
		$I_DB->insert('users', [
			'name' => $username,
			'admin' => 'false',
			'password' => $hashed_password
		]);

		$new_user = $DB->fetch($query);

		setcookie("current_user", "", time() - 86400);
		setcookie("current_user", $new_user["id"], time() + 86400, "/");
		header("Location: http://localhost/showcase/home.php");
	}
	else if ($user) {
		//login
		setcookie("current_user", "", time() - 86400);
		setcookie("current_user", $user["id"], time() + 86400, "/");
		header("Location: http://localhost/showcase/home.php");
	}
?>