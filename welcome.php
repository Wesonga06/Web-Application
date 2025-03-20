<?php
    //echo "It works!";
    //pick form data
    
    
    //check if the user has submitted the form
    if (isset($_POST['fullname'], $_POST['email'])) {
        //using post method
        $full_name = $_POST['fullname'];
        $email = $_POST['email'];
        echo "Welcome <b>$full_name</b> your email is $email";
    }
    //using get method
    if (isset($_GET['fullname'], $_GET['email'])) {
        //pick the data
        $full_name = $_GET['fullname'];
        $email = $_GET['email'];
        echo "Welcome <b>$full_name</b> your email is $email using get method";
    }
?>