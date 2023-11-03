<?php
require "db.php";
$p_id=$_GET['id'];
$b_id=$_GET['c'];
$query=mysqli_query($con,"UPDATE booklist
SET aprv=1
WHERE p_id=$p_id AND b_id=$b_id");
echo "<script>
    alert('Sucessfully Approved Booking');
    window.location.replace('admin_property_list_approve.php');
    </script>";
?>