<?php
require "db.php";
session_start();
$pid=$_GET['id'];
$bid=$_GET['bid'];
$id=$_SESSION['u_id'];
$_SESSION['prpid']=$pid;
$_SESSION['byrid']=$bid;
 $r6=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM booklist WHERE b_id='$bid' AND p_id='$pid'"));
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>single_massage</title>
  <style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.signup-page {
  width: 600px;
  padding: 9% 0 0;
  margin: auto;
}
.form {
  position: relative;
  background: #FFFFFF;
  max-width: 500%;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  padding-top: 4%;

}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;

}
.form select{
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form textarea{
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: white;
  
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 20px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}

.form .message a:hover, a:active, a:visited {
  color: blueviolet;
}
h2{
  font-family: "Roboto", sans-serif;
  font-style: italic;
  color: #43A047;
}
#txt{
  width: 100%;
  height: 200px;
  background-color: ghostwhite;
  border: 2px solid black;
  margin-bottom: 10px;
}
body {
  background: #76b852; 
  font-family: "Roboto", sans-serif;     
}
</style>
</head>
<body>
<div class="signup-page">
  
  <div class="form"><! form portion !>
    <h2>Massage</h2>
    <div id="txt">
      <h4> Sender:</h4>
      <p><p><?php echo $r6['o_msg']; ?></p></p>
      <h4> Reciver:</h4>
      <p><?php echo $r6['b_msg']; ?></p>
    </div>
    <form action="single_massage_owner_backend.php" method="post">
      <textarea rows="4" cols="50" name="msg"></textarea>
      <button>Send</button>
      <p class="message">Back To User Pannel? <a href="login_backend.php"> User Profile </a></p>
    </form>
  </div>
</div>
</body>
</html>
