<?php
require "db.php";
session_start();
$id=$_SESSION["u_id"];
$query=mysqli_query($con,"SELECT * FROM booklist,userinfo,persons WHERE booklist.p_id=persons.p_id AND booklist.b_id=userinfo.id AND booklist.aprv=1 AND booklist.pay_aprv=0");
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
	<title>admin_status</title>
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
  <h1 style="font-style: italic;">Admin Status</h1>
</div>
<table class="table">
  <tr class="thead-dark">
      <th>P_ID.</th>
      <th>Buyer Name</th>
      <th>Seller Name</th>
      <th>Size</th>
      <th>Min_p</th>
      <th>Max_P</th>
      <th>Address</th>
      <th>Detail</th>
      <th>Type</th>
      <th>Offer_type</th>
      <th>Action</th>
    </tr>
  <?php
  while($q=mysqli_fetch_assoc($query)){
    $ad=$q["p_id"];
    $owner=$q["o_id"];
    $addr=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM persons WHERE p_id=$ad"));
    $own=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM userinfo WHERE id=$owner"));
    echo"<tr>
      <td>".$q["p_id"]."</td>
      <td>".$q["username"]."</td>
      <td>".$own["username"]."</td>
      <td>".$q["size"]."</td>
      <td>".$q["min_p"]."</td>
      <td>".$q["max_p"]."</td>
      <td>".$addr["address"]."</td>
      <td>".$q["detail"]."</td>
      <td>".$q["p_typ"]."</td>
      <td>".$q["of_type"]."</td>
      <td><a href='pay_approve.php?id=".$q["p_id"]."&c=".$q["b_id"]."' class='btn btn-primary'>Pay Approve</a>
      <a href='admin_cancel_approve.php?id=".$q["p_id"]."&c=".$q["b_id"]."' class='btn btn-primary'>Cancel Approve</a></td>
      </tr>
    ";

  }
  ?>
    
  </tbody>
</table>
</div>
</body>
</html>