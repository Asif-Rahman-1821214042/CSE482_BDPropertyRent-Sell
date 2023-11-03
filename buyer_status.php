<?php
require "db.php";
session_start();
$_SESSION['prpid']="";
$_SESSION['byrid']="";
  echo $_SESSION['prpid'];
  echo $_SESSION['byrid'];
$id=$_SESSION["u_id"];
$query=mysqli_query($con,"SELECT * FROM userinfo,persons,booklist WHERE booklist.b_id=userinfo.id AND booklist.p_id=persons.p_id AND booklist.b_id=$id");

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
	<title>Buyer_status</title>
</head>
<style>
	@import url(https://fonts.googleapis.com/css?family=Roboto:300);
	body{
		margin: 0;
		padding: 0;
	}
	
  .container-fluid {
    padding-top: 20px;
    padding-bottom: 20px;
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
 
.bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
.bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
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
.thead-dark{
  background-color: black;
  color: white;
}
h2{
  font-family: "Roboto", sans-serif;
  font-style: italic;
  color:whitesmoke;
}
table{
  font-family: "Roboto", sans-serif;
  padding: 80px;
}
th{
  font-style: italic;
}
body{
  background-color: whitesmoke;
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
        <li><a href="login_backend.php">User</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div>
<div class="container-fluid text-center">
  <h1 style="font-style: italic;">Buyer Booked Property Status</h1>
</div>
<table class="table">
  <tr class="thead-dark">
      <th>P_ID.</th>
      <th>Buyer</th>
      <th>Seller.</th>
      <th>Size</th>
      <th>Min_p</th>
      <th>Max_P</th>
      <th>Detail</th>
      <th>Type</th>
      <th>Offer_type</th>
      <th>Action</th>
    </tr>
  <?php

  while($q=mysqli_fetch_assoc($query)){
    $owner=$q["o_id"];
    $owner_un=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM userinfo WHERE id=$owner"));
    
    echo"<tr>
      <td>".$q["p_id"]."</td>
      <td>".$q["username"]."</td>
      <td>".$owner_un["username"]."</td>
      <td>".$q["size"]."</td>
      <td>".$q["min_p"]."</td>
      <td>".$q["max_p"]."</td>
      <td>".$q["detail"]."</td>
      <td>".$q["p_typ"]."</td>
      <td>".$q["of_type"]."</td>
      <td><a href='buyer_property_details_page.php?id=".$q["p_id"]."&cpr=1 'class='btn btn-primary'>View</a>
      <a href='buyer_booking_delect.php?id=".$q["p_id"]."'class='btn btn-primary'>Delete</a>
      <a href='single_massage.php?id=".$q["p_id"]."'class='btn btn-primary'>massage</a></td>
      </tr>
    ";


  }
  ?>
    
  </tbody>
</table>
</div>
</body>
</html>