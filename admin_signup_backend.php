<?php
require "db.php";
 $username=$_POST["un"];
 $mail=$_POST["e"];
 $ad=$_POST["ad"];
 $phn=$_POST["phn"];
 $qs=$_POST["qs"];
  $ans=$_POST["ans"];
 $pass=$_POST["p"];
 $c_pass=$_POST["cp"];
 $filename = $_FILES["fn"]["name"];
 $tempname = $_FILES["fn"]["tmp_name"];
 move_uploaded_file($tempname, $filename);

$query_count=mysqli_query($con,"SELECT * FROM userinfo WHERE email='$mail'");
$count=mysqli_num_rows($query_count);
  if($count==0){
      $query=mysqli_query($con,"INSERT INTO userinfo(username,email,address,phn,typ,pass,c_pass,ulr,qs,ans)
      VALUES ('$username','$mail','$ad','$phn','a','$pass','$c_pass','$filename','$qs','$ans')");
      echo "<script>
    alert('successfully signed up');
    window.location.replace('login_backend.php');
    </script>";
    }else{
    echo "<script>
    alert('This email is already in the system');
    window.location.replace('login_backend.php');
    </script>";
  }
  


?>
