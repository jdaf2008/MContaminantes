<?php


$mysqli = new mysqli ("localhost", "root","","medidas");

	if ($mysqli -> connect_errno) {

	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		# code...


	}

?>