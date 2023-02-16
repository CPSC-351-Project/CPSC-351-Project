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
    </header>
  <link rel="stylesheet" href="design.css">
</head>
<body>
  <title>Login Here</title>
  <form class="myform">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">

    <input type="submit" value="Login">
  </form>



</body></html>
';
?>
