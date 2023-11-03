<?php
require "db.php";
session_start();
$id=$_SESSION["u_id"];
$query=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM userinfo WHERE id=$id"));
?>
<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .container-fluid1 {
    margin-top: 10px;
    margin-left: 10%;
    margin-right: 10%;
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .container-fluid {
    margin-top: 50px;
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
  </style>
</head>
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
        <li><a href="login_backend.php">Profile</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="container-fluid1">
    <div class="row">
    <div class="col-sm-10"><h1>Profile Defination</h1></div>
    </div>
    <div class="row">
<hr>
    <div class="col-sm-3">          
      <div class="text-center">
        <img src="<?php echo $query['ulr']; ?>" class="avatar img-circle img-thumbnail" alt="avatar">
      </div></hr><br>
    </div><!--/col-sm-3-->

                          <div class="col-xs-6">
                              <label><h4>User Name: <?php echo $query['username']; ?></h4></label>
                          </div>
                      
                      
                          
                          <div class="col-xs-6">
                            <label ><h4>Email: <?php echo $query['email']; ?></h4></label>
                          </div>
                      
          
                      

                           <div class="col-xs-6">
                            <label><h4>Address: <?php echo $query['address']; ?></h4></label>
                          </div>
              
                          <div class="col-xs-6">
                              <label><h4>Phone: <?php echo $query['phn']; ?></h4></label> 
                          </div>
                      

                           <center>
                           <div class="col-xs-12">
                                <hr>
                                <a href='edit_profile_form.php' class='btn btn-primary'>Edit</a>
                            </div></center>
              <hr>
              
             </div><!--/row-->

        
    </div><!--/container_fluid1-->
    <div class="container-fluid bg-2 text-center">
  <h3 class="margin">BDRent&PropertwySell</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
</div>
</body>
</html>
