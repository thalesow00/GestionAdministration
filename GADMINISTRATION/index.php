<!DOCTYPE html>
<html>
<head>
  <title>connection</title>
  <link rel="stylesheet" type="text/css" href="style_index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <style>
        body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
}

h1{
  margin: 0px auto;
  color: black;
  text-align: center;
  margin-right: 23px;
  margin-top: 92px;
  
  
}

form {
  background-image:url(image/world.png) ;
  background-repeat: no-repeat ;
  height: 490px;
  width: 30%;
  margin: 90px auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  /* margin-bottom: 10px; */
  margin-top: 25px;
}

input{
  margin-top: 45px;
  width: 100%;
  height: 40px;
  margin-bottom: 20px;
  padding: 10px;
  border: 1px solid #ccc;
}

input[type="submit"] {
  width: 100%;
  height: 40px;
  background-color: #00698f;
  color: #fff;
  border: none;
  border-radius: 10px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color:  black;
}
    </style>
  <h1>Sign In</h1>
  <form method="POST" action="login.php" style="background-color:green; margin-top:-55px;";>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="passwords" required><br><br>

    <input type="submit" value="S'inscrire">
  </form>

 

 