<?php
	require('medoo.php');
	class Codes {
		public $code;

		function __construct() {
			$the_code = mt_rand(10000000, 99999999);
			$this->code = $the_code;
		}

		function getCode() {
			return $this->code;
		}
	}