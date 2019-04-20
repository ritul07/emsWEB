 <?php
	if(isset($_POST['submit'])){
 
		session_start();
		include('dbcon.php');
 
		$a=$_POST['empid'];
		$p=$_POST['pass'];
 
		$query=mysqli_query($con,"select * from register where empid='$a' && pass='$p'");
 
		if (mysqli_num_rows($query) == 0){
			$_SESSION['message']="Login Failed. User not Found!";
			header('location:login.php');
		}
		else{
			$row=mysqli_fetch_array($query);
 
			if (isset($_POST['remember'])){
				//set up cookie
				setcookie("user", $row['empid'], time() + (86400 * 30)); 
				setcookie("pass", $row['pass'], time() + (86400 * 30)); 
			}
 
			$_SESSION['id']=$row['empid'];
			header('location:success.php');
		}
	}
	else{
		header('location:login.php');
		$_SESSION['message']="Please Login!";
	}
?>