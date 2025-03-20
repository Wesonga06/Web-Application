<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Display</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            table{
                margin: auto;
                width: 70%;
            }
            .firstrow, th{
                background-color: darkblue;
                color: white;
                border: 1px solid white;
            }
            button{
                background-color: lightblue;
                text-decoration: none;
            }
        </style>    
</head>
<body>
    <h1>Registered Students</h1>
    <table>
        <tr class= "firstrow">
            <th>Student id
            <th>Student name</th>
            <th>Course</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <!-- display students in our db -->  
         <?php
         //connect to db
         include "connectdb.php";
         //write your query
         $query = "SELECT * FROM student";
         //execute query
         $execute = mysqli_query($connect, $query);
         //check if successful
         if($execute){
            //display the data in the db
            /*test with one record
            $firstrecord  = mysqli_fetch_assoc($execute);
            echo $firstrecord['student_name'];*/
            while( $record  = mysqli_fetch_assoc($execute)){
                //display the record
                $student_id = $record['student_id'];
                $student_name = $record['student_name'];
                $course = $record['course'];
                echo "<tr>
                     <td>$student_id</td>
                     <td>$student_name</td>
                     <td>$course</td>
                     <td><button>
                        <a href='delete.php?deleteid=$student_id'>delete</a>
                     </button></td>
                     <td><button>
                        <a href='update.php'>update</a>
                     </button></td>
                </tr>";
            }
         } else {
            die(mysqli_error($connect));
         }
        ?>
    </table>  
</body>
</html>
