<?php
require "db.php";
session_start();
$id=$_SESSION["u_id"];
$p_id=$_GET['id'];
$o_id=$_GET['oid'];
$query=mysqli_query($con,"INSERT INTO booklist(p_id,b_id,aprv,pay_aprv,o_id)
      VALUES ($p_id,$id,0,0,$o_id)");
echo "<script>
    alert('Property Sucessfully Booked');
    window.location.replace('login_backend.php');
    </script>";
?>