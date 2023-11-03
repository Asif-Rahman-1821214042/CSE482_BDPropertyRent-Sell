<?php
session_start();
$_SESSION['e'] = '';
  $_SESSION['p'] = '';
$_SESSION['u_id']='';
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Indx</title>
</head>

<style>
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);
  body{
    margin: 0;
    padding: 0;
    background-color: whitesmoke;
    background-image: url('pichome.jpg');
  }
  
  
  li{
    float: left;
    font-family: "Roboto", sans-serif;
  }

  a{
    display: block;
    text-decoration: none;
    padding: 16px;
    color: white;
    
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
  img{
    border: 1px solid black;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
.form{
  background: #76b852;
  max-width: 500px;
  margin: 150px auto 100px;
  padding: 30px;
  padding-top: 2%;
  text-align: center;
  border: 2px solid black;
  border-radius: 25px;
}
.form input {
  display: inline-block;
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  max-width: 30%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px; 
  border-radius: 10px;
} 
.form select{
  display: inline-block;
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 30%;
  border: 10;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px; 
  border-radius: 10px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #333;
  width: 92%;
  border: 0;
  padding: 15px;
  color: white;
}
.form button:hover,.form button:active,.form button:focus {
  background: blueviolet;
}
.form .message {
  margin: 20px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
h2{
  font-family: "Roboto", sans-serif;
  font-style: italic;
  color:whitesmoke;
}
</style>
<body>

<div>
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
        <li><a href="#about">About</a></li>
        <li><a href="indx_property.php">Property</a></li>
        <li><a href="indx_catalog.php">Catalogs</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>


<div class="container">
  <div class="form">
    <form method="post" action="indx_specify_search.php">
      <h2>Search</h2>
      <select name="choice" required>
        <option value="rent">Rent</option>
        <option value="sell">Buy</option>
      </select>
      
      <select name="p_typ" required>
      <option value="Appartment">Appartment</option>
      <option value="Plot">Plot</option>
      <option value="Office">Office</option>
      <option value="Hall Room">Hall Room</option>
      </select>
        <input type="text" name="max" placeholder="Maximum Price" required />
        <input type="text" name="min" placeholder="Minimum Price"required/>
        <input type="text" name="masize" placeholder="Max SQFT" required/>
        <input type="text" name="misize" placeholder="Min SQFT" required/>
      <button>Serach</button>
    </form>
  </div>
</div>


<div class="container-fluid bg-3 text-center" id="about">    
  <h3 style="font-style: italic;">About BDRent&PropertySell</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>SELL dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <center><img src="h1.jpg" class="img-responsive well " style="width:80%" alt="Image" loading="lazy"></center>
    </div>
    <div class="col-sm-4"> 
      <p>RENT ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <center><img src="app.jpg" class="img-responsive well " style="width:80%" alt="Image" loading="lazy"></center>
    </div>
    <div class="col-sm-4"> 
      <p>INTERIOR dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <center><img src="h2.jpg" class="img-responsive well " style="width:80%" alt="Image" loading="lazy"></center>
    </div>
  </div>
</div>


<div class="container-fluid bg-2 text-center">
  <h3 class="margin">BDRent&PropertwySell</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
</div>

</body>
</html>
