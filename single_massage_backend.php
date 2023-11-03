<?php
require "db.php";
session_start();
$pid=$_SESSION['prpid'];
$uid=$_SESSION['u_id'];
$msg=$_POST['msg'];
 $r6=mysqli_query($con,"UPDATE booklist SET b_msg='$msg' WHERE b_id='$uid' AND p_id='$pid'");
     echo "<script>
    alert('successfully send');
    window.location.replace('buyer_status.php');
    </script>";
?>