<?php
require "db.php";
session_start();
$id=$_GET["bxd"];
$p_id=$_GET['id'];
$query=mysqli_query($con,"DELETE FROM booklist WHERE p_id=$p_id AND b_id=$id");
echo "<script>
    alert('Sucessfully Booking Deleted');
    window.location.replace('seller_status.php');
    </script>";
?>