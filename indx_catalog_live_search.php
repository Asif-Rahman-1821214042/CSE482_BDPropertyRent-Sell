<?php
require "db.php";
$s=$_GET['q'];
$query2=mysqli_query($con,"SELECT * FROM catalog,userinfo WHERE catalog.c_oid=userinfo.id AND catalog.c_name like '$s%'");
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

.thead-dark{
  background-color: black;
  color: white;
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
</body>
</html>