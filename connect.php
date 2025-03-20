<?php
	//connect to database server
	$server = "localhost";
	$serveraccount = "root";
	$serverpassword = "";
	//establish a connection
	$connect = mysqli_connect($server, $serveraccount, $serverpassword);
	//check if it has connected to db server
	if ($connect) {
		echo "Server connected successfully";
	} else{
		die(mysqli_connect_error($connect));
	}
	//write a query to create a database
	$query = "CREATE DATABASE groupbmar";
	//execute query
	$execute = mysqli_query($connect, $query);
	//check if successfully executed
	if ($execute) {
		echo "<br>db created successfully";
	} else{
		die(mysqli_error($connect));
	}


?>