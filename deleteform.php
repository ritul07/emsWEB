<?php

include('dbcon.php');

$id=$_REQUEST['sid'];

echo "$id";

$qry="DELETE FROM `register` WHERE `empid`='$id';";

$run=mysqli_query($con,$qry);

if($run == true){
    ?>
    <script>
        alert('Data Deleted Successfully');
        window.open('delete.php','_self');
    </script>
    <?php
}
?>
