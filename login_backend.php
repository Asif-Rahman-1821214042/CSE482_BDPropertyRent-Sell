<?php
require "db.php";
session_start();
$log_reslt='';
$_SESSION["cat_id"]="";
$_SESSION["cat_amount"]="";
$_SESSION["owner_id"]="";

if(isset($_POST['e']))
{
  $id=$_POST['e'];
  $pass=$_POST['p'];
  $_SESSION['e'] = $id;
  $_SESSION['p'] = $pass;
}else{
  $id=$_SESSION['e'];
  $pass=$_SESSION['p'];
}
$query=mysqli_query($con,"SELECT * FROM userinfo");
while($row=mysqli_fetch_assoc($query))
{
if($id==$row["email"] and password_verify($pass, $row['pass'])){
   $log_reslt="passed";
   $_SESSION['typ']=$row["typ"];
   $_SESSION['u_id']=$row["id"];

    break;
   }else{
    $log_reslt='';
   }
}

if($log_reslt==="passed" and $_SESSION['typ']==="b"){
  $_SESSION['prpid']="";
  $_SESSION['byrid']="";
  echo $_SESSION['prpid'];
  echo $_SESSION['byrid'];
  echo $_SESSION['prpid'];//for test session
echo '<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>User Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {
    font-size: 16px;
  }
  .margin {
    margin-bottom: 45px;
  }
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f;
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">BDRent&PropertySell</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php">Home</a></li>
        <li><a href="buy_property_list.php">Buy/Rent</a></li>
        <li><a href="buyer_status.php">Status</a></li>
        <li><a href="buyer_catalog_status.php">Catalogs</a></li>
        <li><a href="buyer_history.php">History</a></li>
        <li><a href="login.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Who Am I?</h3>
  <img src="'.$row["ulr"].'" class="img-responsive img-circle margin" style="display:inline" alt="profile_img" width="350" height="350">
  <h3>'.$row["username"].'</h3>
  <a href="edit_profile.php" class="btn btn-primary">View Profile Details</a>
</div>


<div class="container-fluid bg-2 text-center">
  <h3 class="margin">What Am I?</h3>
  <p>Buyer, ID: '.$_SESSION['u_id'].'#B .Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
</div>


<footer class="container-fluid bg-4 text-center">
    <p>BDRent&PropertySell<a href=""> www.BDRent&PropertySell.com</a></p> 
</footer>

</body>
</html>
';                  
}
elseif($log_reslt==="passed" and $_SESSION['typ']==="s"){
  $_SESSION['prpid']="";
  $_SESSION['byrid']="";
  echo $_SESSION['prpid'];
  echo $_SESSION['byrid'];
  echo '<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>User Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {
    font-size: 16px;
  }
  .margin {
    margin-bottom: 45px;
  }
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f;
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">BDRent&PropertySell</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="add_property.php">Add Property</a></li>
        <li><a href="add_catalog.php">Add Catalog</a></li>
        <li><a href="seller_status.php">Status</a></li>
        <li><a href="seller_catalog_status.php">Sold Catalogs</a></li>
        <li><a href="seller_history.php">History</a></li>
        <li><a href="seller_property_list.php">Properties</a></li>
        <li><a href="login.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Who Am I?</h3>
  <img src="'.$row["ulr"].'" class="img-responsive img-circle margin" style="display:inline" alt="profile_img" width="350" height="350">
  <h3>'.$row["username"].'</h3>
  <a href="edit_profile.php" class="btn btn-primary">View Profile Details</a>
</div>


<div class="container-fluid bg-2 text-center">
  <h3 class="margin">What Am I?</h3>
  <p>Seller, ID: '.$_SESSION['u_id'].'#S .Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
</div>


<footer class="container-fluid bg-4 text-center">
    <p>BDRent&PropertySell<a href=""> www.BDRent&PropertySell.com</a></p> 
</footer>

</body>
</html>
';  
}elseif($log_reslt==="passed" and $_SESSION['typ']==="a"){
  $_SESSION['prpid']="";
  $_SESSION['byrid']="";
  echo $_SESSION['prpid'];
  echo $_SESSION['byrid'];
echo '<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>User Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f;
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">BDRent&PropertySell</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin_property_list_approve.php">G.Approve</a></li>
        <li><a href="admin_status.php">Status</a></li>
        <li><a href="admin_history.php">History</a></li>
        <li><a href="admin_property_status_all.php">Properties</a></li>
         <li><a href="admin_signup.php">A.Admin</a></li>
        <li><a href="login.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Who Am I?</h3>
  <img src="'.$row["ulr"].'" class="img-responsive img-circle margin" style="display:inline" alt="profile_img" width="350" height="350">
  <h3>'.$row["username"].'</h3>
  <a href="edit_profile.php" class="btn btn-primary">View Profile Details</a>
</div>


<div class="container-fluid bg-2 text-center">
  <h3 class="margin">What Am I?</h3>
  <p>Admin, ID: '.$_SESSION['u_id'].'#A .Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
</div>


<footer class="container-fluid bg-4 text-center">
    <p>BDRent&PropertySell<a href=""> www.BDRent&PropertySell.com</a></p> 
</footer>

</body>
</html>
';
}
else{
  echo "<script>
    alert('Wrong Password');
    window.location.replace('login.php');
    </script>";
}
?>


