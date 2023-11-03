<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>edit_profile_form</title>
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
  max-width: 360px;
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
.bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
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
select{
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
body {
  background: #76b852; 
  font-family: "Roboto", sans-serif;     
}
</style>
</head>
<body>
<div class="signup-page">
  <div class="form">
    <form method="post" action="edit_profile_backend.php" enctype="multipart/form-data">
      <h2>Edit Profile</h2>
      <input type="file" id="myFile" name="fn" >
      <input type="text" placeholder="Username" name="un" />
      <input id="e" type="text" placeholder="Email" name="e" />
      <input type="text" placeholder="Address" name="ad" />
      <input id="phn" type="text" placeholder="Phone Number" name="phn" />
      <input id="p" type="password" placeholder="Password" name="p" />
      <input id="cp" type="password" placeholder=" Confirm password" name="cp" />
      <button onclick="return validateForm()">Edit</button>
      <p class="message">Back To Profile? <a href="login_backend.php"> Profile </a></p>
    </form>
  </div>
</div>
</body>
<script>
  function validateForm(){
  var password=document.getElementById("p").value;
  var cpassword=document.getElementById("cp").value;
  var e=document.getElementById("e").value;
  var phn=document.getElementById("phn").value;
  var pattern="[a-z0-9._%+\-]+@[a-z0-9]+[.][a-z]{3,3}$";
  var mblpattern="[0-9]{11,11}$";
  if(e!=""){
    if(!e.match(pattern)){
    alert("Email is not in correct pattern");
    return false;
  }
  }
  if(phn!=""){
    if(!phn.match(mblpattern)){
    alert("Phone number isn't in correct pattern");
    return false;
  }
  }
  if(password!=""){
    if(password.length<=5){
    alert("Password must be greater than 5");
    return false;
  }
  }
  if(cpassword!=""){
    if(cpassword.length<=5){
    alert("Confirm password must be greater than 5");
    return false;
    }
  }
  if(cpassword!=""){
    if(password!=cpassword){
    alert("password and confirm password must match");
    return false;
  }
  }
  if(password!=""){
    if(password!=cpassword){
    alert("password and confirm password must match");
    return false;
  }
  }

}  
</script>
</html>