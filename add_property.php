<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SignUp Page</title>
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
textarea{
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
    <form method="post" action="add_property_backend.php" enctype="multipart/form-data">
      <h2>SignUp</h2>
      <input type="file" id="myFile" name="fn" required>
      <input type="file" id="myFile" name="fn1" required>
      <input type="file" id="myFile" name="fn2" required>
      <input id="ads" type="text" placeholder="Address" name="ad" required/>
      <input id="s" type="text" placeholder="Size" name="s" required/>
      <input id="min" type="text" placeholder="Min Price" name="min" required/>
      <input id="max" type="text" placeholder="Max Price" name="max" required/>
      <select name="p_typ">
      <option value="Appartment">Appartment</option>
      <option value="Plot">Plot</option>
      <option value="Office">Office</option>
      <option value="Hall Room">Hall Room</option>
      </select>
      <select name="typ">
      <option value="sell">sell</option>
      <option value="rent">rent</option>
      </select>
      <input id="lat" type="text" placeholder="Location LAT" name="lat" required/>
      <input id="lng" type="text" placeholder="Location LNG" name="lng" required/>
      <textarea name="dtl" rows="4" cols="50" required></textarea>
      <button onclick="return validateForm()">Creat Property</button>
      <p class="message">Back To Profile? <a href="login_backend.php"> Profile </a></p>
    </form>
  </div>
</div>
</body>

<script>
    function validateForm(){
  var s= document.getElementById("s").value;
  var min= document.getElementById("min").value;
  var max= document.getElementById("max").value;
  var lat= document.getElementById("lat").value;
  var lng= document.getElementById("lng").value;
  var myFile= document.getElementById("myFile").value;
  var ads= document.getElementById("ads").value;
  var numpattern="[0-9]$";
  if(myFile=="")
  {
    alert("please enter the IMG file");
    return false;
  }
  if(ads=="")
  {
    alert("please enter the address");
    return false;
  }
  if(s=="")
  {
    alert("please enter the size");
    return false;
  }
  if(!s.match(numpattern)){
    alert("size must be a number");
    return false;
  }
  if(min=="")
  {
    alert("please enter the min price");
    return false;
  }
  if(!min.match(numpattern)){
    alert("min must be a number");
    return false;
  }
  if(max=="")
  {
    alert("please enter the max price");
    return false;
  }
  if(!max.match(numpattern)){
    alert("max must be a number");
    return false;
  }
  if(lat=="")
  {
    alert("please enter the lat value");
    return false;
  }
  if(!lat.match(numpattern)){
    alert("lat must be a number");
    return false;
  }
  if(lng=="")
  {
    alert("please enter the lng value");
    return false;
  }
  if(!lng.match(numpattern)){
    alert("lng must be a number");
    return false;
  }
  
}

  
</script>
</html>