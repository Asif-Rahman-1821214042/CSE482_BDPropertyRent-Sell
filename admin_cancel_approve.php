<?php
require "db.php";
$p_id=$_GET['id'];
$b_id=$_GET['c'];
$query=mysqli_query($con,"DELETE FROM booklist
WHERE p_id=$p_id AND b_id=$b_id");
echo "<script>
    alert('Sucessfully Cancel Booking');
    window.location.replace('admin_status.php');
    </script>";
?>