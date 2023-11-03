<?php
require "db.php";
$c_id=$_GET['id'];
$query=mysqli_query($con,"DELETE FROM catalog WHERE cid=$c_id");
echo "<script>
    alert('Catalog Successfully Deleted');
    window.location.replace('login_backend.php');
    </script>";
?>