<?php
class SQLThingy {
	function query($string) {
		$con = mysqli_connect('localhost','root','monkeys','showcase');

		if ($query = mysqli_query($con, $string)) {
			return true;
		}
		else {
			return false;
		}
	}
}
?>