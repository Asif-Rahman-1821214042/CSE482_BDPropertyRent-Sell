<?php
require "db.php";
$p_id=$_GET['id'];
$query=mysqli_query($con,"DELETE FROM persons WHERE p_id=$p_id");
echo "<script>
    alert('Sucessfully Deleted Property');
    window.location.replace('login_backend.php');
    </script>";
?>