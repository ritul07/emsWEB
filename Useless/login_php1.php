<?php 
include ('dbcon.php');

if(isset($_POST["submit"]))
{
	$a=$_POST['empid'];
	$p=$_POST['pass'];

	$sql="select * from register where empid='$a' AND pass='$p'";
	//$result=mysqli_query($con,$sql);
//mysqli_num_rows($result)==1
	if(mysqli_query($con,$sql)){
		 header("Location: front_page.php");
	}
	else{
		echo "Invalid Credentials";
	}
}
 ?>