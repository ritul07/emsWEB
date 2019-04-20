<!DOCTYPE html>
<html>
<head>
	<title>Register</title>

	<style>
		p a{
			font-size: 25px;
			margin-left: 85%;
		}

		span{
			font-size: 30px;
			position: relative;
			left: 54%;
		}

	</style>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<script>
	function validateform(){  
var name=document.signup.name.value; 
var empid=document.signup.empid.value; 
var add=document.signup.add.value;
var exp=document.signup.exp.value;

  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}
else if(empid.length<1){
	alert("Employee ID must be atleast 1 characters long")
return false;
}
else if(add==null || add==""){
	alert("Address can't be blank")
	return false;
}
}
</script>
</body>
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
<form action="register_php.php" method="post" style="text-align: center;" name="signup" onsubmit="validateform()">

	<tr>
		<th colspan="2" style="text-align: left; font-size: 30px;">Register :</th>
	</tr>

	<tr>
		<td>Name of the employee : </td>
		<td><input type="text" name="name" placeholder="Enter name"></td></tr>
	
	<tr>
		<td>Employee ID : </td>
		<td><input type="text" name="empid" placeholder="Emter Employee ID"></td>
	</tr>
	
	<tr>
		<td>Date of birth : </td>
		<td><input type="date" name="dob"></td>
	</tr>
	
	<tr>
		<td>Address : </td>
		<td><input type="text" name="addr" placeholder="Enter the Address"></td>
	</tr>
	
	<tr>
		<td>Experience(in years) : </td>
		<td><input type="number" name="exp" placeholder="Enter Experience"></td>
	</tr>

	<tr>
		<td>Password : </td>
		<td><input type="password" name="pass" placeholder="Enter Password"></td>
	</tr>
	
	<tr>
		<td colspan="2">
			<button name="submit" style="margin: 20px; padding: 10px" type="submit">Sign Up</button>
	<button style="margin: 20px; padding: 10px" type="reset">Reset</button></td>
	</tr>
	
</form>
</table>

<span>Already an Employee ?   <a href="login.php">Login</a></span>

</body>
</html>