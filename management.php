<?php
session_start();
    include "connection.php";
    include "functions.php";
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
<h4> Manage Your Account Here!</h4>
<body>
    <div align="center">
        <div class= "row">
            <form action="">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" class="form-control" value="<?php echo $user_data['first_name'];?>"><br><br>
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" class="form-control" value="<?php echo $user_data['last_name'];?>"><br><br>
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $user_data['email'];?>"><br><br>
                    <label for="job">Position title</label>
                    <input type="text" name="job" class="form-control" value="<?php echo $user_data['job'];?>"><br><br>
                    <label for="bio">Bio</label>
                    <input type="text" name="bio" class="form-control" value="<?php echo $user_data['bio'];?>"><br><br>
                    <input type="submit" value="Add Information"><br>
                    <input type="submit" value="Update Information"><br>
                </div>
            </form>
        </div>
    </div>
</body>

</html>