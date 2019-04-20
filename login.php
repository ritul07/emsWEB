<?php
	session_start();
	include('dbcon.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<style>

		p a{
			font-size: 25px;
			margin-left: 85%;
		}

		span{
			font-size: 30px;
			position: relative;
			left: 55%;
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

<table>
<form method="post" action="login_php.php" style="text-align: center;" name="login" onsubmit="validateform()">
	<tr>
		<th colspan="2" style="text-align: left; font-size: 30px;">Login :</th>
	</tr>

	<tr>
		<td>Employee ID : </td>
		<td><input type="text" name="empid" placeholder="Enter Username" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" required></td>
	</tr>

	<tr>
	<td>Password : </td>
	<td><input type="password" name="pass" placeholder="Enter Password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>"></td>
	</tr>

	<tr>
		<td colspan="2">
			<input type="checkbox" name="remember"> Remember me
		</td>
	</tr>

	<tr>
		<td colspan="2">
			<button name="submit" style="margin: 20px; padding: 10px" type="submit">Submit</button>
			<button style="margin: 20px; padding: 10px" type="reset">Reset</button></td>
	</tr>
	
</form>
</table>

<span>Not an Employee ?   <a href="register.php">Register</a></span>

<?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
	
</body>
</html>