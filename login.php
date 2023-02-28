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
          <h1></h1>
      </header>
</head>
<body style="text-align: center;">
  <h2>Login</h2>
  <title>Login Here</title>
  <div class="login-form">
    <br>
    <form action="" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br><br>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br><br>
      
      <input type="submit" value="Login">
    </form>
    <br>
    <p style="text-align: center"><strong>Don't have an account? Sign up below</strong></p>
    <a href="student_sign_up.php">Sign Up for Students</a><br>
    <a href="alumni_sign_up.php">Sign Up for Alumni</a><br>

    <?php
    // SQL Database connection
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "alumnireach";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Escape the username and password to prevent SQL injection attacks
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Query the database to check if the username and password match
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if (mysqli_num_rows($result) > 0) {
        // The username and password match a record in the database
        echo "Login successful!";
    } else {
        // The username and password do not match any records in the database
        echo "Invalid username or password";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
  </div>
</body>
</html>
