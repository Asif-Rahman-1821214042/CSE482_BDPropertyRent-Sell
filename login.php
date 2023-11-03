<?php
session_start();
$_SESSION['e']='';
$_SESSION['p']='';
$_SESSION['u_id']='';
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>
  <style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);
.form {
  background: #FFFFFF;
  max-width: 360px;
  margin: 150px auto 100px;
  padding: 45px;
  text-align: center;
  padding-top: 2%;
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
  margin: 10px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
h2{
  font-family: "Roboto", sans-serif;
  font-style: italic;
  color: #43A047;
}
body {
  background: #76b852; 
  font-family: "Roboto", sans-serif;     
}
</style>
</head>
<body>
  <div class="form">
    <form class="login-form" action="login_backend.php" method="post">
      <h2>Login</h2>
      <input type="text" placeholder="email" name="e"/>
      <input type="password" placeholder="password" name="p"/>
      <button>login</button>
      <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
      <p class="message">Password Change? <a href="forget_password_form.php">forget password</a></p>
      <p class="message">Home? <a href="index.php">Home</a></p>
    </form>
  </div>
</body>
</html>