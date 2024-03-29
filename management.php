<?php
// Worked on by Sona
session_start();
include "connection.php";
include "functions.php";
$user_data = get_userdata($conn, $_SESSION['user_id']);
?>

<!DOCTYPE html>
<html>
<head>
<title>User Management</title>
<link rel="stylesheet" href="design.css">
</head>
<body>
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
                  <li><a href="event_table.php">Events Page</a></li>
              </ul>
          </li>
          <li>
              <a href="login.php">Account</a>
              <ul>
                  <li><a href="login.php">Login/Create Account</a></li>
                  <li><a href="management.php">Manage Account</a></li>
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
    <div class="center">
        <div class="row">
            <form action="" method="POST" style="max-width: 600px; margin: 0 auto; padding: 20px; padding-top: 0px; background-color: white;">
                <div class="form-group">
                    <!-- Shows what is in the user's profile -->
                    <h1>Manage your Account here</h1>
                    <label for="firstname">First Name</label>
                    <input type="text" name="first_name" class="form-control" value="<?php echo $user_data['first_name'];?>" disabled><br><br>
                    
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" class="form-control" value="<?php echo $user_data['last_name'];?>" disabled><br><br>
                    
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $user_data['email'];?>" disabled><br><br>
                    
                    <label for="job">Position title</label>
                    <input type="text" name="job" class="form-control" value="<?php echo $user_data['job'];?>" disabled><br><br>
                    
                    <label for="bio">Bio</label>
                    <input type="text" name="bio" class="form-control" rows="2" value="<?php echo $user_data['bio'];?>" disabled></input><br><br>
                    
                    <label for="phone">Phone number</label>
                    <input type="text" name="phone" class="form-control" value="<?php echo $user_data['contactInformation'];?>" disabled><br><br>
                    
                    <a href="edit_profile.php"><input type="button" name="edit_profile" value="Edit Profile">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
