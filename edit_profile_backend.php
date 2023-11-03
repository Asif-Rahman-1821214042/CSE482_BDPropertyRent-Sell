<?php
require "db.php";
session_start();
$id=$_SESSION["u_id"];
 $username=$_POST["un"];
 $mail=$_POST["e"];
 $ad=$_POST["ad"];
 $phn=$_POST["phn"];
 $pass=$_POST["p"];
 $c_pass=$_POST["cp"];
 $filename = $_FILES["fn"]["name"];
 $tempname = $_FILES["fn"]["tmp_name"];
 move_uploaded_file($tempname, $filename);

 if(!empty($filename)){
$q7="UPDATE userinfo SET ulr='$filename' WHERE id='$id'";
$r7=mysqli_query($con,$q7);
}
if(!empty($username)){
$q1="UPDATE userinfo SET username='$username' WHERE id='$id'";
$r1=mysqli_query($con,$q1);
}
if(!empty($ad)){
$q2="UPDATE userinfo SET address='$ad' WHERE id='$id'";
$r2=mysqli_query($con,$q2);
}
if(!empty($phn)){
$q3="UPDATE userinfo SET phn='$phn' WHERE id='$id'";
$r3=mysqli_query($con,$q3);
}
if(!empty($mail)){
  
  $query_count=mysqli_query($con,"SELECT * FROM userinfo WHERE email='$mail'");
  $count=mysqli_num_rows($query_count);
  if($count==0){
    $q4="UPDATE userinfo SET email='$mail' WHERE id='$id'";
    $r4=mysqli_query($con,$q4);
  }
  else{
    echo "<script>
    alert('email alreay exist in the system');
    window.location.replace('login.php');
    </script>";
    exit();
  }
}
if(!empty($pass) and !empty($c_pass)){
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
    $q6="UPDATE userinfo SET pass='$hashed_pass',c_pass='$c_pass' WHERE id='$id'";
    $r6=mysqli_query($con,$q6);
}

if(empty($pass) and empty($c_pass) and empty($mail) and empty($phn) and empty($ad) and empty($username) and empty($filename)){
    echo "<script>
    alert('No change done');
    window.location.replace('login_backend.php');
    </script>";
}
echo "<script>
    alert('Successfully Updated');
    window.location.replace('login.php');
    </script>";
?>
