<?php
// Worked on by Sona

session_start();
include "connection.php";
include "functions.php";
$user_data = check_login($conn);
$id = $user_data['user_id'];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Stores the form data into variables
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $job = $_POST['job'];
    $bio = $_POST['bio'];
    $phone_num = $_POST['phone'];
    $address = $_POST['address'];

    $query = "UPDATE alumni SET first_name = ?, last_name = ?, email = ?, job = ?, bio = ?, contactInformation = ? WHERE user_id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'sssssii', $first_name, $last_name, $email, $job, $bio, $phone_num, $id);
    if(mysqli_stmt_execute($stmt)) {
        echo "Profile updated successfully";
        header("location:management.php");
        exit;}
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alumni Reach</title>
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
                    <!-- Form to edit the user account information, when the user submits it updates their account -->
                    <h1>Edit your Account here</h1>
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" class="form-control" value="<?php echo $user_data['first_name'];?>"><br><br>
                    
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" class="form-control" value="<?php echo $user_data['last_name'];?>"><br><br>
                    
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $user_data['email'];?>"><br><br>
                    
                    <label for="job">Position title</label>
                    <input type="text" name="job" class="form-control" value="<?php echo $user_data['job'];?>"><br><br>
                    
                    <label for="bio">Bio</label>
                    <input type="text" name="bio" class="form-control" rows="2" value="<?php echo $user_data['bio'];?>"></input><br><br>
                    
                    <label for="phone">Phone number (No "-" please!)</label>
                    <input type="text" name="phone" class="form-control" value="<?php echo $user_data['contactInformation'];?>"><br><br>

                    <a href="management.php"><input type="submit" name="edit_profile" value="Update Changes">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
