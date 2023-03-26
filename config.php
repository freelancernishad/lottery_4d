<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lottery";



//$conn = new PDO('mysql:host=localhost;dbname=school_oop', 'school_oop', 'school_oop');

$conn = new mysqli($servername,$username,$password,$database);

if(mysqli_connect_error()){
	echo "connection failed";
	exit();
	
}else{
	
}



 
 
 
 
?>