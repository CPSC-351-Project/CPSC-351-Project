<?php
  session_start();
  include "connection.php";
  include "functions.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $email = $_POST['email'];
      $pword = $_POST['pword'];

      if(!empty($email)){
          // read from database

          $alumni = "select * from alumni where email='$email' limit 1";
          $student = "select * from alumni where email='$email' limit 1";
          $result = mysqli_query($conn, $alumni);

          if($result){
            if ($result && mysqli_num_rows($result) > 0){
              $user_data = mysqli_fetch_assoc($result);
              if($user_data['pword'] === $pword)
              {  
                $id = $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;
            }
          }
          echo "Wrong username or password!";
      }else{
          echo "Please enter some valid information!";
      }
      
    }
  }

?>
<!DOCTYPE html>
<html>
<head>    
  <header>
    <link rel="stylesheet" href="design.css">
    <div id="wrap">
        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li>
                <a href="#">Job</a>
                <ul>
                    <li><a href="Find Jobs.php">Find Jobs</a></li>
                    <li><a href="Add Job.php">Post a Job</a></li>
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
            <li>
                <a href="logout.php">Logout</a>
            </li>
        
        </ul>
      </div>
      <!-- <a href="https://cnu.edu/"><img src="cnu.png" style=float:left;width:27% ></a> -->
    <h1>AlumniReach</h1>      
  </header>
</head>
  <body style="text-align: center;">
    <h2>Login</h2>
    <title>Login Here</title>
    <div class="login-form">
      <br>
      <form action="" method="post">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>
        
        <label for="pword">Password:</label>
        <input type="password" id="pword" name="pword"><br><br>
        
        <input type="submit" value="Login">
      </form>
      <br>
      <p style="text-align: center"><strong>Don't have an account? Sign up below</strong></p>
      <a href="student_sign_up.php">Sign Up for Students</a><br>
      <a href="alumni_sign_up.php">Sign Up for Alumni</a><br>
    </div>
  </body>
</html>

