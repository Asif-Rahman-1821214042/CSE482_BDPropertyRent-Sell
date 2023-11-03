<?php
require "db.php";
session_start();
$c=$_GET['cpr'];
$id=$_SESSION["u_id"];
$p_id=$_GET['id'];
$query=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM userinfo,persons WHERE persons.o_id=userinfo.id AND p_id=$p_id"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>buyer_property_details_page</title>
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
  .container1 {
      width: 100%;
      height: 450px;

    }
  #map {
      width: 80%;
      height: 80%;
      border: 1px solid blue;
      margin-left: 10%;
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
          echo"<li><a href='buyer_status.php'>Status</a></li> ";

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
  <h3 id="text">Property View</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="<?php echo $query["url"]?>" class="img-responsive" style="width:100%" alt="Image">
      <p id="text">Image 1</p>
    </div>
    <div class="col-sm-4"> 
      <img src="<?php echo $query["url1"]?>" class="img-responsive" style="width:100%" alt="Image">
      <p id="text">Image 2</p>    
    </div>
    <div class="col-sm-4"> 
      <img src="<?php echo $query["url2"]?>" class="img-responsive" style="width:100%" alt="Image">
      <p>Image 3</p>    
    </div>
  </div><br>
  <div class="row">
    <h4 id="text_style">Location:</h4>
    <p><?php echo $query["address"]?></p><br>
    <h4 id="text_style">Type:</h4>
    <p><?php echo $query["p_typ"]?></p>
    <p>Offering Type: <?php echo $query["of_type"]?></p><br>
    <h4 id="text_style">Owner:</h4>
    <p><?php echo $query["username"]?></p>
    <p><?php echo $query["phn"]?></p>

  </div>
</div><br>
<div style="border-bottom: 2px solid black; margin-left: 5%; margin-right: 5%; border-radius: 10px; opacity: 0.5;"></div>

<div class="container-fluid container-padding " style="height: 20%;">
    <div class="row">
    <div class="col-sm-4">
      <h4 id="text_style">Propert Details</h4>
      <ul>
        <li><?php echo $query["detail"]?></li>
        <li>Size: <?php echo $query["size"]?></li>
      </ul>
    </div>
    <div class="col-sm-4">
      <h4 id="text_style">Price</h4>
      <ul>
        <li>Min: <?php echo $query["min_p"]?></li>
        <li>Max: <?php echo $query["max_p"]?></li>
      </ul>
    </div>
    <div class="col-sm-4">
      <h4 id="text_style">Actions</h4>
      <?php
      
      if($c==1){
        echo "<h5>Already Done</h5>";

      }else{
        $oid=$query["o_id"];
        echo"
        <a href='book_property_backend.php?id=".$p_id."&cpr=0&oid=".$oid."' class='btn btn-danger'>Book</a>";
      }
      ?>
    </div>
  </div>
</div><br>
<div class="container1">
    <center><h1>Location</h1></center>
    <div id="map"></div>
  </div>
<footer class="container-fluid bg-4 text-center">
  <p>BDRent&PropertySell<a href=""> www.BDRent&PropertySell.com</a></p> 
</footer>
</body>
<script>

var map;
function loadMap() {
  var loc = {lat: <?php echo $query['lat'];?>, lng: <?php echo $query['lng'];?>};
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: loc
    });

    var marker = new google.maps.Marker({
      position: loc,
      map: map
    });

}
</script>
<script 
    src="Google Map API will be Placed here">
</script>
</html>
