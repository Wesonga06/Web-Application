<?php
    //delete operation
    //connect to the db
    include "connectdb.php";
    //pick delete id from url
    $deleteid = $_GET['deleteid'];
    //write query
    $query = "DELETE FROM student WHERE student_id = $deleteid";
    //execute query
    $execute = mysqli_query($connect, $query);
    //check if successful
    if($execute){
        //redirect to display
        header("Location: display.php");
    } else {
        die(mysqli_error($connect));
    }
?>