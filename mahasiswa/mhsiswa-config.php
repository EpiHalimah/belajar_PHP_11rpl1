<?php
	$mysqli = new mysqli ("localhost","root","","uts_epi");
	if ($mysqli -> connect_errno) {
			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
			exit();
	}
?>