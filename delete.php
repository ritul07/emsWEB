<!DOCTYPE html>
<html>
<head>
	<title>Admin-delete</title>

	<style>
	
		p a{
			font-size: 25px;
			margin-left: 85%;
		}

	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 id="title" style="text-align: center;">Welcome to Admin Dashboard</h1>

<div id="header" style="height: 90px; width: 100%; text-align: center;">
	<div id="logo" style="height: 75px; width: 200px">
		<a href="front_page.html"><img src="logo.png"></a>
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

<p><a href="admin_dash.php">Logout</a></p><br>

<table>
	<form action="delete.php" method="post">

	<tr><td colspan="2">Employee Information</td></tr>	
	<tr><td><label>Enter Employee ID : </label></td>
	<td><input type="number" name="empid" placeholder="Enter Employee ID">
	</td></tr>
	
	<tr><td colspan="2"><button type="submit" name="submit">Search</button></td></tr>

</form>
</table>
	
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $id=$_POST['empid'];
    include('dbcon.php');
    $sql="SELECT * FROM `register` WHERE `empid`='$id'";
    $run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)>0){
        $data=mysqli_fetch_assoc($run);
        ?>
        <hr><hr>
        <table border="1" style="width:60%; margin-top:50px;">
            <tr>
                <th colspan="3">Employee Details</th>
            </tr>
            <tr>
                <th align="left">Name</th>
                <td><?php echo $data['name']; ?></td>
            </tr>
            <tr>
                <th align="left">Employee ID</th>
                <td><?php echo $data['empid']; ?></td>
            </tr>
            <tr>
                <th align="left">DOB</th>
                <td><?php echo $data['dob']; ?></td>
            </tr>
            <tr>
                <th align="left">Address</th>
                <td><?php echo $data['addr']; ?></td>
            </tr>
            <tr>
                <th align="left">Experience</th>
                <td><?php echo $data['exp']; ?></td>
            </tr>
            <tr>
                <td colspan="2"><a href="deleteform.php?sid=<?php echo $data['empid']; ?>"><button>Delete</button></a></td>
            </tr>
        </table>
        <hr><hr>
        <?php
    }
    else{
        echo "<script> alert('NO Employee FOUND');</script>";
    }
}
?>