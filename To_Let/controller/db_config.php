<?php
	$db = mysqli_connect("localhost", "root", "", "db_tolet");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>
