<?php
require "db.php";
session_start();
$_SESSION["cat_id"]="";
$_SESSION["cat_amount"]="";
$_SESSION["owner_id"]="";
$c=$_GET['cpr'];
$id=$_SESSION["u_id"];
$c_id=$_GET['id'];
$query=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM userinfo,catalog WHERE catalog.c_oid=userinfo.id AND cid=$c_id"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>buyer_catalog_details_page</title>
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
    color: black;
  }
  p {
    font-size: 16px;
  }
  img{
    border: 1px solid black;
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
  .container-padding {
    padding-top: 70px;
    padding-bottom: 70px;
    padding-left: 50px;
    padding-right: 50px;
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
  #text{
    color: black;
  }
  #text_style{
    font-style: italic;
    font-weight: bold;
  }
  </style>
</head>
<body>

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
        <li><a href="#">Home</a></li>
        <?php
        if($c==1){
          echo"<li><a href='buyer_catalog_status.php'>Status</a></li> ";

        }elseif ($c==5) {
          echo"<li><a href='home.php'>Status</a></li> ";
        }
        else{
        echo"<li><a href='buy_property_list.php'>Status</a></li> ";
      }
      ?>
        
        <li><a href="login_backend.php">User</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container text-center">    
  <h3 id="text">Interior Catalog View</h3><br>
  <div class="row">

    <div class="col-sm-4">
      <?php
  if($c==0){
    echo '
      <img src="blur.jpg" class="img-responsive" style="width:100%" alt="Image">';
  }else{
    echo '
      <img src='.$query["url1"].' class="img-responsive" style="width:100%" alt="Image">';
  }
  ?>
      <p id="text">Image 1</p>
    </div>
    <div class="col-sm-4"> 
      <?php
  if($c==0){
    echo '
      <img src="blur.jpg" class="img-responsive" style="width:100%" alt="Image">';
  }else{
    echo '
      <img src='.$query["url2"].' class="img-responsive" style="width:100%" alt="Image">';
  }
  ?>
      <p id="text">Image 2</p>    
    </div>
    <div class="col-sm-4"> 
      <?php
  if($c==0){
    echo '
      <img src="blur.jpg" class="img-responsive" style="width:100%" alt="Image">';
  }else{
    echo '
      <img src='.$query["url3"].' class="img-responsive" style="width:100%" alt="Image">';
  }
  ?>
      <p>Image 3</p>    
    </div>
  </div><br>
  <div class="row">
    <h4 id="text_style">Location:</h4>
    <p><?php echo $query["address"]?></p><br>
    <h4 id="text_style">Type:</h4>
    <p><?php echo $query["c_type"]?></p>
    <h4 id="text_style">Owner:</h4>
    <p><?php echo $query["username"]?></p>
    <p><?php echo $query["email"]?></p>
    <p><?php echo $query["phn"]?></p>
  </div>
</div><br>
<div style="border-bottom: 2px solid black; margin-left: 5%; margin-right: 5%; border-radius: 10px; opacity: 0.5;"></div>

<div class="container-fluid container-padding " style="height: 20%;">
    <div class="row">
    <div class="col-sm-4">
      <h4 id="text_style">Catalog Details</h4>
      <ul>
        <li>Catalog Name: <?php echo $query["c_name"]?></li>
        <li><?php echo $query["c_detail"]?></li>
      </ul>
    </div>
    <div class="col-sm-4">
      <h4 id="text_style">Price</h4>
      <ul>
        <li>Min: <?php echo $query["c_price"]?></li>
      </ul>
    </div>
    <div class="col-sm-4">
      <?php
      
      if($c==1){
        echo"<h4 id='text_style'>Payed By Script</h4>";

      }else{
        echo"<h4 id='text_style'>Pay By Script</h4>";
      }
      ?>
      <img src="stripe.jpeg" class="img-responsive" style="width:100%" alt="Image"><br>
      <?php
      
      if($c==1){

      }else{
        $oid=$query["c_oid"];
        echo"<center><a href='stripe_payment_form.php?id=".$c_id."&cpr=0&oid=".$oid."' class='btn btn-primary'>Book</a></center>";
      }
      ?>
    </div>
  </div>
</div><br>

<footer class="container-fluid bg-4 text-center">
  <p>BDRent&PropertySell<a href=""> www.BDRent&PropertySell.com</a></p> 
</f'ooter>
'
</body>
</html>
