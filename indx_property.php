<?php
require "db.php";
$query=mysqli_query($con,"SELECT * FROM persons,userinfo WHERE persons.o_id=userinfo.id");
$query2=mysqli_query($con,"SELECT * FROM catalog,userinfo WHERE catalog.c_oid=userinfo.id");
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
	<title>indx_property</title>
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
    min-width: 700px;
  }

  .navbar-nav  li a:hover {
    color: #1abc9c !important;
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
.table{
  font-family: "Roboto", sans-serif;
  padding: 80px;
  min-width: 700px;
}
th{
  font-style: italic;
}
.form-control{
max-width: 50%;
margin: 0 auto 30px;
min-width: 700px;
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
        <li><a href="index.php">Home</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div>
<div class="container-fluid text-center">
  <h1 style="font-style: italic; min-width: 700px;">All Property List</h1>
</div>

<input class="form-control" id="myInput" type="text" placeholder="Search..">

<table class="table">
  <tr class="thead-dark">
      <th>P_ID.</th>
      <th>Seller</th>
      <th>Size</th>
      <th>Address</th>
      <th>Min_p</th>
      <th>Max_P</th>
      <th>Detail</th>
      <th>Type</th>
      <th>Offer_type</th>
      <th>Action</th>
    </tr>
  <?php
  while($q=mysqli_fetch_assoc($query)){
    $p=$q['p_id'];
    $count=0;
    $adr=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM persons WHERE p_id=$p"));
   if($count==0){
    echo"<tbody id=myTable>
    <tr>
      <td>".$q["p_id"]."</td>
      <td>".$q["username"]."</td>
      <td>".$q["size"]."</td>
      <td>".$adr["address"]."</td>
      <td>".$q["min_p"]."</td>
      <td>".$q["max_p"]."</td>
      <td>".$q["detail"]."</td>
      <td>".$q["p_typ"]."</td>
      <td>".$q["of_type"]."</td>
      <td><a href='indx_property_view.php?id=".$q["p_id"]."' class='btn btn-primary'>View</a></td>
      </tr></tbody>
    ";}


  }
  ?>
</table>

<div class="container-fluid text-center">
  <h1 style="font-style: italic;  min-width: 700px;">All Catalog List</h1>
</div>

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
    $count=0;
   if($count==0){
    echo"<tbody id=myTable1>
     <tr>
      <td>".$q2["cid"]."</td>
      <td>".$q2["c_name"]."</td>
      <td>".$q2["username"]."</td>
      <td>".$q2["c_detail"]."</td>
      <td>".$q2["c_type"]."</td>
      <td>".$q2["c_price"]."</td>
      <td><a href='indx_catalog_view.php?id=".$q2["cid"]."' class='btn btn-primary'>View</a>
      </tr></tbody>
    ";}


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