<?php

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

}

echo '
<!DOCTYPE html>
<html>
<head>
<header>
        <link rel="stylesheet" href="design.css">
        <div id="wrap">
            <ul class="navbar">
              <li><a href="index.html">Home</a></li>
              <li>
                <a href="#">Job</a>
                <ul>
                  <li><a href="Find Jobs.html">Find Jobs</a></li>
                  <li><a href="Add Job.html">Post a Job</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Networking</a>
                <ul>
                  <li><a href="#">Advice Forum</a></li>
                  <li><a href="#">Events Page</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Account</a>
                <ul>
                  <li><a href="login.php">Create Account</a></li>
                  <li><a href="#">Manage Account</a></li>
                  <li><a href="#">Notifications</a></li>
                </ul>
              </li>
            </ul>
          </div>
          
        <!-- <a href="https://cnu.edu/"><img src="cnu.png" style=float:left;width:27% ></a> -->
        <h1>Website Title</h1>
    </header>
  <link rel="stylesheet" href="design.css">
  <title>Login Here</title>
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
';
?>
