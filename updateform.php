<?php
session_start();
if(isset($_SESSION['id'])){
    echo "";
}
else{
    header('location: front_page.php');
}
?>

<?php
    
    include('dbcon.php');
        $sid=$_GET['sid'];
        $sql="SELECT * FROM `register` WHERE `empid`='$sid'";
        $run=mysqli_query($con,$sql);

        $data=mysqli_fetch_assoc($run);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin-update</title>

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

<p><a href="admin_dash.php">Logout</a></p><br>

 
        <table>
            <form method="post" action="updatedata.php" enctype="multipart/form-data">


            <tr>
                <th  align="left">Employee Name</th>
                <td><input type="text" name="name" value = <?php echo $data['name']; ?> ></td>
            </tr>

            <tr>
                <th  align="left">Employee DOB</th>
                <td><input type="date" name="dob" value = <?php echo $data['dob'];?> ></td>
            </tr>

            <tr>
                <th  align="left">Employee Address</th>
                <td><input type="text" name="addr"value = <?php echo $data['addr'];?> ></td>
            </tr>

            <tr>
                <th  align="left">Employee Experience</th>
                <td><input type="number" name="exp" value = <?php echo $data['exp'];?> ></td>
            </tr>

            <tr align="center">
                <td colspan="2">
                    <input type="hidden" name="empid" value="<?php echo $data['empid']; ?>">
                    <button type="submit" name="submit">Update Data</button>
                </td>
            </tr>


        </form>
        </table>

</body>
</html>