<?php
require "db.php";
session_start();
$id=$_SESSION["u_id"];
 $c_name=$_POST["c_name"];
 $prc=$_POST["prc"];
 $typ=$_POST["typ"];
 $dtl=$_POST["dtl"];
 $filename = $_FILES["fn"]["name"];
 $tempname = $_FILES["fn"]["tmp_name"];
 move_uploaded_file($tempname, $filename);
 $filename1 = $_FILES["fn1"]["name"];
 $tempname1 = $_FILES["fn1"]["tmp_name"];
 move_uploaded_file($tempname1, $filename1);
 $filename2 = $_FILES["fn2"]["name"];
 $tempname2 = $_FILES["fn2"]["tmp_name"];
 move_uploaded_file($tempname2, $filename2);

$query=mysqli_query($con,"INSERT INTO catalog(c_name,c_detail,url1,url2,url3,c_oid,c_type,c_price)
VALUES ('$c_name','$dtl','$filename','$filename1','$filename2','$id','$typ','$prc')");
echo "<script>
    alert('Successfully catalog added');
    window.location.replace('login_backend.php');
    </script>";
?>
