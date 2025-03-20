<?php
    //select record first before updating it
    include "connectdb.php";
    $updateid = $_GET['updateid'];
    $query = "SELECT * FROM student WHERE student_id = $updateid";
    $execute = mysqli_query($connect, $query);
    if ($execute){
        $record = mysqli_fetch_assoc($execute);
        $student_name = $record ['student_name'];
        $course = $record['course'];
    } else {
        die(mysqli_error($connect));
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update</title>
</head>
<body>
	<h1>Update Course</h1>
	<form method="post">
		<label>Student name: </label>
		<input type="text" name="name" value="<?php
        echo $student_name; ?>">
		<label>Course: </label>
		<select name="course">
            <option value= "<?php echo $course; ?>"><option>
			<option>DBIT</option>
			<option>ICS</option>
			<option>BCOM</option>
			<option>BBIT</option>
		</select>
		<input type="submit" name="submit" value="Update">
	</form>
	<?php
	//update operation
	//connect to db - groupbmar
	include "connectdb.php";
    //pick update id from url
    $updateid = $_GET['updateid'];

	//check if user clicked update
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		//pick the data
		$student_name = trim($_POST['name']);
		$course = $_POST['course'];
		//write query
		$query = "UPDATE student SET student_name = '$student_name', course = '$course' WHERE student_id = $updateid";
		//execute query
		$execute = mysqli_query($connect,$query);
		//check if successful
		if ($execute) {
			header("Location:display.php");
			//echo "<div>Student added successfully</div>";
		} else{
			die(mysqli_error($connect));
		}
	}


	?>
</body>
</html>