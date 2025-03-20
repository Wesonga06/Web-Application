<?php
	//connect to groupbmarch database
	$server = "localhost";
	$serveraccount = "root";
	$serverpassword = "";
	$db = 'groupbmarch';
	//establish connection
	$connect = mysqli_connect($server, $serveraccount, $serverpassword, $db);
	//check if not connected
	if (!$connect) {
		die(mysqli_connect_error($connect));
	}
?>