<?php
require "db.php";
session_start();
$pid=$_SESSION['prpid'];
$uid=$_SESSION['byrid'];
$msg=$_POST['msg'];
 $r6=mysqli_query($con,"UPDATE booklist SET o_msg='$msg' WHERE b_id='$uid' AND p_id='$pid'");
     echo "<script>
    alert('successfully send');
    window.location.replace('seller_status.php');
    </script>";
?>