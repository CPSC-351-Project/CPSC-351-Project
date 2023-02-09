<?php

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

}

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Login Here (test code here)</title>
</head>
<body>
  <div class="login-form">
    <form action="">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br><br>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br><br>
      
      <input type="submit" value="Login">
    </form>
  </div>



</body></html>
