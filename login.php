<?php

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

}

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="design.css">
  <title>Login Here</title>
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
                  <a href="login.php">Account</a>
                  <ul>
                    <li><a href="login.php">Login/Create Account</a></li>
                    <li><a href="">Manage Account</a></li>
                    <li><a href="account.php">Notifications</a></li>
                </ul>
                </li>
              </ul>
            </div>
            
            
            
          <!-- <a href="https://cnu.edu/"><img src="cnu.png" style=float:left;width:27% ></a> -->
          <h1>AlumniReach</h1>
      </header>
</head>
<body style="text-align: center;">
  <title>Login Here</title>
  <form action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    
    <input type="submit" value="Login">
  </form>
  <br>
  <p><strong>Don't have an account? Sign up below</strong></p><br>
  <a href="student_sign_up.php">Sign Up for Students</a><br>
  <a href="alumni_sign_up.php">Sign Up for Alumni</a>
</body>
</html>
