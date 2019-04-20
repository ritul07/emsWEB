<?php

include('dbcon.php');
$id=$_POST['empid'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$addr=$_POST['addr'];
$exp=$_POST['exp'];


$qry="UPDATE register SET `name`='$name',`dob`='$dob',`addr`='$addr',`exp`='$exp' WHERE `empid`='$id'";

$run=mysqli_query($con,$qry);

if($run == true){
    ?>
    <script>
        alert('Data Updated Successfully');
        window.open('update.php?sid=<?php echo $id;?>','_self');
    </script>
    <?php
}
?>
