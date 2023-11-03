<?php
require "db.php";
session_start();
$id=$_SESSION["u_id"];
$query2=mysqli_query($con,"SELECT * FROM catalog_book,catalog,userinfo WHERE catalog_book.buyr_id=userinfo.id AND catalog_book.cat_id=catalog.cid AND catalog_book.buyr_id=$id");
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
	<title>Buyer_catalog_status</title>
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
  <h1 style="font-style: italic;">Buyer Catalog List</h1>
</div>
<input class="form-control" id="myInput" type="text" placeholder="Search..">
<table class="table">
  <tr class="thead-dark">
      <th>C_ID.</th>
      <th>C_name</th>
      <th>Seller_name</th>
      <th>C_details</th>
      <th>C_type</th>
      <th>C_price</th>
      <th>Action</th>
    </tr>
  <?php
  while($q2=mysqli_fetch_assoc($query2)){
    $o=$q2['c_oid'];
    $catalog_id=$q2['cid'];
    $count=0;
    $owner_name=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM userinfo WHERE id='$o'"));
    echo"<tbody id=myTable>
     <tr>
      <td>".$q2["cid"]."</td>
      <td>".$q2["c_name"]."</td>
      <td>".$owner_name["username"]."</td>
      <td>".$q2["c_detail"]."</td>
      <td>".$q2["c_type"]."</td>
      <td>".$q2["c_price"]."</td>
      <td><a href='buyer_catalog_details_page.php?id=".$q2["cid"]."&cpr=1' class='btn btn-primary'>View</a>
      </tr></tbody>
    ";


  }
  ?>
</table>


</div>
</body>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</html>