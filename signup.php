<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>signup</title>
  <style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);
.form {
  background: #FFFFFF;
  max-width: 360px;
  margin: 100px auto 100px;
  padding: 45px;
  text-align: center;
  padding-top: 3%;
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
  <div class="form">
    <form method="post" action="signup_backend.php" enctype="multipart/form-data">
      <h2>SignUp</h2>
      <input type="file" id="myFile" name="fn" required>
      <input id="un" type="text" placeholder="Username" name="un" required/>
      <input id="e" type="text" placeholder="Email" name="e" required/>
      <input id="ads" type="text" placeholder="Address" name="ad" required/>
      <input id="phn" type="text" placeholder="Phone Number" name="phn" required/>
      <select name="typ">
      <option value="b">Buy</option>
      <option value="s">Sell</option>
      </select>
      <select name="qs">
      <option value="Who is your childhood best friend?">Who is your childhood best friend?</option>
      <option value="Which Anmie do you like most in your childhood?">Which Anmie do you like most in your childhood?</option>
      <option value="What is your favroute food?">What is your favroute food?</option>
      </select>
      <input id="ans" type="text" placeholder="Answer" name="ans" required/>
      <input id="p" type="password" placeholder="Password" name="p" required/>
      <input id="cp" type="password" placeholder=" Confirm password" name="cp" required/>
      <button onclick="return validateForm()">Creat Account</button>
      <p class="message">Back To Login? <a href="login.php"> Login </a></p>
    </form>
  </div>
</body>
<script>
  function validateForm(){
  var myFile= document.getElementById("myFile").value;
  var un= document.getElementById("un").value;
  var ads= document.getElementById("ads").value;
  var ans= document.getElementById("ans").value;
  var password=document.getElementById("p").value;
  var cpassword=document.getElementById("cp").value;
  var e=document.getElementById("e").value;
  var phn=document.getElementById("phn").value;
  var pattern="[a-z0-9._%+\-]+@[a-z0-9]+[.][a-z]{3,3}$";
  var mblpattern="[0-9]{11,11}$";
  if(myFile=="")
  {
    alert("please enter the IMG file");
    return false;
  }
  if(un=="")
  {
    alert("please enter the Username");
    return false;
  }
  if(e=="")
  {
    alert("please enter the Email");
    return false;
  }
  if(!e.match(pattern)){
    alert("Email is not in correct pattern");
    return false;
  }
  if(ads=="")
  {
    alert("please enter the address");
    return false;
  }
  if(phn=="")
  {
    alert("please enter the phone number");
    return false;
  }
  if(!phn.match(mblpattern)){
    alert("Phone number isn't in correct pattern");
    return false;
  }
  if(ans=="")
  {
    alert("please enter your answer");
    return false;
  }
  if(password=="")
  {
    alert("please enter your password");
    return false;
  }
  if(password.length<=5){
    alert("Password must be greater than 5");
    return false;
  }
  if(cpassword=="")
  {
    alert("please enter your confirm password");
    return false;
  }
  if(cpassword.length<=5){
    alert("Confirm password must be greater than 5");
    return false;
  }
  if(password!=cpassword){
    alert("password and confirm password must match");
    return false;
  }
}  
</script>
</html>