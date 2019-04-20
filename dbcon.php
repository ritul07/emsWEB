<?php 
$host="localhost";
$user="root";
$password="";
$db="emp";

$con=mysqli_connect($host,$user,$password,$db);

if ($con->connect_error) {
	die("Connection Failed:".$con->connect_error);
}
echo "Connected Successfully";
?>