<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>add_catalog</title>
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
    <form method="post" action="add_catalog_backend.php" enctype="multipart/form-data">
      <h2>Add CataLog</h2>
      <input type="file" id="myFile" name="fn" required>
      <input type="file" id="myFile" name="fn1" required>
      <input type="file" id="myFile" name="fn2" required>
      <input id="cname" type="text" placeholder="Catalog Name" name="c_name" required/>
      <input id="prc" type="text" placeholder="Price" name="prc" required/>
      <select name="typ">
      <option value="Appartment">Appartment</option>
      <option value="Office">Office</option>
      </select>
      <textarea name="dtl" rows="4" cols="50" required></textarea>
      <button onclick="return validateForm()">Creat Catalog</button>
      <p class="message">Back To Profile? <a href="login_backend.php"> Profile </a></p>
    </form>
  </div>
</div>
</body>
<script>
    function validateForm(){
  var prc= document.getElementById("prc").value;
  var myFile= document.getElementById("myFile").value;
  var cname= document.getElementById("cname").value;
  var numpattern="[0-9]$";
  if(myFile=="")
  {
    alert("please enter Image File of Catalog!");
    return false;
  }
  if(cname=="")
  {
    alert("please enter Catalog Name!");
    return false;
  }
  if(prc=="")
  {
    alert("please enter price!");
    return false;
  }
  if(!prc.match(numpattern)){
    alert("price must be a number");
    return false;
  }
}

  
</script>
</html>