<?php
 //single-line comment
#single-line comment
/*multiple line
comment*/
echo "Hello World";

//variables, identifiers and data types
$first_name = "John";
$age = 40;
$weight = 40.5;
$haveCompleted = false;
$unit = NULL;

//Check datatypes - var_dump()
echo "<br>";
echo var_dump($first_name);
echo "<br>";
echo var_dump($age);
echo "<br>";
echo var_dump($weight);
echo "<br>";
echo var_dump($haveCompleted);
echo "<br>";
echo var_dump($unit);
//arrays
//indexed arrays
$student_marks = array(45, 67, 78);
$student_names = array('Jane' , 'Mary' , 'John');
//access elements of indexed arrays
echo "<div>Student 3 scored $student_marks[2]</div>";
echo 'Second Student '.$student_names[1];
//associative arrays - named keys
$unit_codes =  array('Web' => 100, 'DSA' => 101, 'IS' => 102);
echo $unit_codes['IS'];
//loops -  for loop
for ($j = 1; $j < 7; $j++){
	echo "<div>Sentence $j</div>";
}
//while loop
$k = 0;
while ($k <= 4){
	//code...
	echo "<br>Sentence $k";
	$k = $k + 2;
}
//foreach - loop through an array
foreach ($student_names as $name){
	echo "<div> $name </div>";
}
//loop through an associative array
echo "<table border = '1'>";
foreach($unit_codes as $units => $code){
	echo "<tr>
	<td>$units</td>
	<td>$code</td>
	</tr>";
}
echo "</table>";
//if statement
$age = 56;
if ($age<18) {
	echo "<br> Cannot Vote";
}elseif($age>=18){
	echo "<br> Can vote"; 
}else{
	echo "<br>First time voting";
}
//switch statement
$day = 2;
switch($day){
	case 1: 
	 echo "<br>Saturday";
	 break;
	case 2:
	 echo "<br>Sunday";
	 break; 
	default:
	 echo "<br>Weekday"; 
}
//functions
function helloFunction(){
	echo "<h1>Hello function</h1>";
}
//call a function
helloFunction();
//functions with parameters
function helloUser($username){
	echo "Hello $username";
}
helloUser("Joy");
//function with a return statement
function getSum($num1, $num2){
	return $num1 + $num2;
}
echo "<br>";
echo getSum(45.2, 20);
//predefined function
//date()
echo date("d/m/y");
//isset() - checks if a variable has been declared and is not NULL
$someExample = 77;
if(isset($someExample)){
	//code...
	echo "<br> Variable has been set";
}
//constants
define('PI', 3.14);
echo "<br>Tomorrow is ".PI." day";
?>