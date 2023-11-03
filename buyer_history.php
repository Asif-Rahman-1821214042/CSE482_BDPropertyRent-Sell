<?php
require "db.php";
session_start();
$id=$_SESSION["u_id"];
$query=mysqli_query($con,"SELECT * FROM history WHERE b_id=$id");
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
	<title>buyer_history</title>
</head>
<style>
	@import url(https://fonts.googleapis.com/css?family=Roboto:300);
	body{
		margin: 0;
		padding: 0;
    background-color: whitesmoke;
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
  <h1 style="font-style: italic;">Buyer History</h1>
</div>
<table class="table">
  <tr class="thead-dark">
      <th>B_ID.</th>
      <th>Buyer name</th>
      <th>O_ID.</th>
      <th>Owner name</th>
      <th>O.Email</th>
      <th>O.Phn</th>
      <th>P.Address</th>
      <th>Size</th>
      <th>Min</th>
      <th>Max</th>
      <th>Type</th>
      <th>Offer_type</th>
    </tr>
  <?php
  while($q=mysqli_fetch_assoc($query)){
    echo"<tr>
      <td>".$q["b_id"]."</td>
      <td>".$q["b_name"]."</td>
      <td>".$q["o_id"]."</td>
      <td>".$q["o_name"]."</td>
      <td>".$q["o_email"]."</td>
      <td>".$q["o_phn"]."</td>
      <td>".$q["p_adr"]."</td>
      <td>".$q["p_size"]."</td>
      <td>".$q["p_min"]."</td>
      <td>".$q["p_max"]."</td>
      <td>".$q["p_type"]."</td>
      <td>".$q["p_oftyp"]."</td>
      </tr>
    ";

  }
  ?>
    
  </tbody>
</table>
</div>
</body>
</html>