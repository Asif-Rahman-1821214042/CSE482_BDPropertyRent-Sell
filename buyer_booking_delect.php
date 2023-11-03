<?php
require "db.php";
session_start();
$id=$_SESSION["u_id"];
$p_id=$_GET['id'];
$query=mysqli_query($con,"DELETE FROM booklist WHERE p_id=$p_id AND b_id=$id");
echo "<script>
    alert('Sucessfully Booking Deleted');
    window.location.replace('login_backend.php');
    </script>";
?>