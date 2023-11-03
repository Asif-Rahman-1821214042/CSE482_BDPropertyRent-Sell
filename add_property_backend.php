<?php
require "db.php";
session_start();
$id=$_SESSION["u_id"];

 $addr=$_POST["ad"];
 $size=$_POST["s"];
 $min=$_POST["min"];
 $max=$_POST["max"];
 $p_typ=$_POST["p_typ"];
 $typ=$_POST["typ"];
 $dtl=$_POST["dtl"];
 $lat=$_POST["lat"];
 $lng=$_POST["lng"];
 $filename = $_FILES["fn"]["name"];
 $tempname = $_FILES["fn"]["tmp_name"];
 move_uploaded_file($tempname, $filename);
 $filename1 = $_FILES["fn1"]["name"];
 $tempname1 = $_FILES["fn1"]["tmp_name"];
 move_uploaded_file($tempname1, $filename1);
 $filename2 = $_FILES["fn2"]["name"];
 $tempname2 = $_FILES["fn2"]["tmp_name"];
 move_uploaded_file($tempname2, $filename2);

$query=mysqli_query($con,"INSERT INTO persons(url,url1,url2,address,size,min_p,max_p,p_typ,of_type,detail,o_id,lat,lng)
VALUES ('$filename','$filename1','$filename2','$addr','$size','$min','$max','$p_typ','$typ','$dtl','$id','$lat','$lng')");
echo "<script>
    alert('Successfully added property');
    window.location.replace('login_backend.php');
    </script>";
?>
