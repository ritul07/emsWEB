<?php
	session_start();
 
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('login.php');
		exit();
	}
	include('dbcon.php');
	$query=mysqli_query($con,"select * from register where empid='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($query);

	echo "<br><br>";
	echo "Cookie saved is :";
	echo "<br>";
	echo "Employee ID : ".$_COOKIE['user'];
	echo "<br>";
	echo "Password : ".$_COOKIE['pass'];
?>


<!DOCTYPE html>
<html>
<head>
	<title>SRM Employee Management System</title>

	<style>
	
		p a{
			font-size: 25px;
			margin-left: 85%;
		}

	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 id="title" style="text-align: center;">Welcome to Employee Management System</h1>

<div id="header" style="height: 90px; width: 100%; text-align: center;">
	<div id="logo" style="height: 75px; width: 200px">
		<a href="front_page.php"><img src="logo.png"></a>
	</div>

	<div id="rheader"></div>

</div>

		<nav>
			<ul>
				<li><a href="http://www.srmuniv.ac.in/aboutus/srm-university-where-you-have-freedom-take-wings">About Us</a></li>
				<li><a href="http://www.srmuniv.ac.in/content/admission-india-portal">Admission</a></li>
				<li><a href="http://www.srmuniv.ac.in/academics/colleges-and-schools">Academics</a></li>
				<li><a href="http://www.srmuniv.ac.in/research/research">Research</a></li>
				<li><a href="http://www.srmuniv.ac.in/content/contact-us-0">Contact Us</a></li>
			</ul>
		</nav>

<p><a href="logout.php">Logout</a></p><br>


<table>
	<form action="front_page.php" method="post">

	<tr><td colspan="2"><h2>Login Success</h2></td></tr>	
	<tr><td colspan="2"><?php echo "Welcome "; echo $row['name']; echo " Ji!"; ?></td></tr>
	
	<tr><td colspan="2"><button type="submit" name="logout">Home Page</button></td></tr>

	</form>
</table>
	
</body>
</html>
