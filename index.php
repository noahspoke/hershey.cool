<?php
	define('DATABASE_NAME', 'showcase');
	define('DATABASE_USER', 'root');
	define('DATABASE_PASS', 'monkeys');
	define('DATABASE_HOST', 'localhost');
	include_once('class.DBPDO.php');

	$DB = new DBPDO();
	$places = $DB->fetchAll("SELECT * FROM places");
?>

<!DOCTYPE html>
<html>
<head>

	<style>
		html, body {
			margin:0;
			padding: 0;
		}

		#bigmap {
			width: 100%;
			height: 70%;
		}
	</style>

	<script type="text/javascript"></script>

	<body>
		<header 
	</body>

</head>
</html>