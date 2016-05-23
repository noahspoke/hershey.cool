<?php
	setcookie("current_user", "", time() - 86400, "/");
	header("Location: http://localhost/showcase/home.php");
?>