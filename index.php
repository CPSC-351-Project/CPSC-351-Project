<?php
session_start();
    include "connection.php";
    include "functions.php";
    // $user_data = checkLoginStatus();
    $user_data = check_login($conn);
?>

<!DOCTYPE html>
<html>
<title>Alumni Reach</title>
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
                  <li><a href="forum.php">Advice Forum</a></li>
                  <li><a href="#">Events Page</a></li>
                  <li><a href="message.php">Messaging</a></li>
              </ul>
          </li>
          <li>
              <a href="login.php">Account</a>
              <ul>
                  <li><a href="login.php">Login/Create Account</a></li>
                  <li><a href="management.php">Manage Account</a></li>
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
<h4>Hello, <?php echo $user_data['first_name']; echo " "; echo $user_data['last_name']; ?>! Welcome to Alumni Reach!</h4>
<body>
  <div class="carousel fade" id="center-image"></div>
  <script>
    // get the image element
    var img = document.getElementById("center-image");

    // center the image horizontally
    img.style.display = "block";
    img.style.marginLeft = "auto";
    img.style.marginRight = "auto";
  </script>
  
  <script src="function.js"></script>
  <div class="center">
    <li><a href="Find Jobs.php" class="urlclass">Jobs</a></li>
    <p class="center">Find or post job openings.</p>

    <li><a href="event.php" class="urlclass">Events</a></li>
    <p class="center">Find career events that are happening around campus</p>

    <li><a href="forum.php" class="urlclass">Discussion Forum</a></li>
    <p class="center">This forum is for users to ask questions and for general discussion.</p>

    <li><a href="message.php" class="urlclass">Messaging</a></li>
    <p class="center">Message other users within the site.</p>

    <li><a href="management.php" class="urlclass">My Account</a></li>
    <p class="center">Manage your account.</p>
  </div>
</body>
<footer>
</footer>
</html>