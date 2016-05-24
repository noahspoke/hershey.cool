<?php
	require("db_info.php");
	setcookie("current_user", "", time() - 86400, "/");
	header("Location: ".$url_scheme."home.php");
?>