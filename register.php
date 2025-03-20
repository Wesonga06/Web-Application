<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>
	<h1>Register Course</h1>
	<form method="post">
		<label>Student name: </label>
		<input type="text" name="name">
		<label>Course: </label>
		<select name="course">
			<option>DBIT</option>
			<option>ICS</option>
			<option>BCOM</option>
			<option>BBIT</option>
		</select>
		<input type="submit" name="submit" value="Register">
	</form>
	<?php
	//create/insert operation
	//connect to db - groupbmarch
	include "connectdb.php";
	//check if user clicked submit
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		//pick the data
		$student_name = trim($_POST['name']);
		$course = $_POST['course'];
		//write query
		$query = "INSERT INTO student(student_name, course) VALUES('$student_name', '$course')";
		//execute query
		$execute = mysqli_query($connect,$query);
		//check if successful
		if ($execute) {
			//header("Location:display.php");
			echo "<div>Student added successfully</div>";
		} else{
			die(mysqli_error($connect));
		}
	}


	?>
</body>
</html>