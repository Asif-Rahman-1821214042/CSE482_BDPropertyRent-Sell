<?php
require "db.php";

 $mail=$_POST["e"];
 $qs=$_POST["qs"];
  $ans=$_POST["ans"];
 $pass=$_POST["p"];
 $c_pass=$_POST["cp"];

$query_count=mysqli_query($con,"SELECT * FROM userinfo WHERE email='$mail'");
$count=mysqli_num_rows($query_count);
  if($count==0){
    echo "<script>
    alert('email isnt in the system');
    window.location.replace('login.php');
    </script>";
  }else{
    $query=mysqli_fetch_assoc($query_count);
    if($query['qs']===$qs){
      if($query['ans']===$ans){
      $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
      $q3="UPDATE userinfo SET pass='$hashed_pass',c_pass='$c_pass' WHERE email='$mail'";
      $r3=mysqli_query($con,$q3);
      echo "<script>
    alert('successfully changed password');
    window.location.replace('login.php');
    </script>";
      }else{
        echo "<script>
    alert('Wrong identification ans');
    window.location.replace('login.php');
    </script>";
      }

    }else{
     echo "<script>
     alert('Wrong identification qs');
     window.location.replace('login.php');
     </script>";
    }
  }
  


?>
