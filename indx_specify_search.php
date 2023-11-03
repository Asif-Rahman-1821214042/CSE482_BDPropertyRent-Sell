<?php
require "db.php";
$of_typ=$_POST['choice'];
$p_typ=$_POST['p_typ'];
$max=$_POST['max'];
$min=$_POST['min'];
$masize=$_POST['masize'];
$misize=$_POST['misize'];
$query=mysqli_query($con,"SELECT * FROM persons,userinfo WHERE persons.o_id=userinfo.id  AND persons.min_p>=$min AND persons.max_p<=$max AND persons.size>=$misize AND persons.size<=$masize AND of_type='$of_typ' AND persons.p_typ='$p_typ'");
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
	<title>indx_specify_search</title>
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
        <li><a href="index.php">Home</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div>
<div class="container-fluid text-center">
  <h1 style="font-style: italic;">General Specified Search</h1>
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