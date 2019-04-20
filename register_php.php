<?php 
include ('dbcon.php');

if(isset($_POST["submit"]))
{
$name=$_POST['name'];
$empid=$_POST['empid'];
$dob=$_POST['dob'];
$addr=$_POST['addr'];
$exp=$_POST['exp'];
$pass=$_POST['pass'];


$select = mysqli_query($con, "SELECT `empid` FROM `register` WHERE `empid` = '".$empid."'") or exit(mysqli_error($con));
if(mysqli_num_rows($select)) {
    exit('This empid is already being used');
}

$sql="INSERT INTO register(name,empid,dob,addr,exp,pass) VALUES('$name','$empid','$dob','$addr','$exp','$pass')";

	if(mysqli_query($con,$sql)){
		//echo "<script> alert('Data submitted!'); </script>";
		header("Location: login.php");
	}

	else{
		echo "Error:" .$sql. "<br>". mysqli_error($con);
	}
}
?>