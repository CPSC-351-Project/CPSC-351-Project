<!DOCTYPE html>
<html lang="en">
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
                <a href="login.php">Account</a>
                <ul>
                    <li><a href="student_or_alumni.php">Create Account</a></li>
                    <li><a href="">Manage Account</a></li>
                    <li><a href="account.php">Notifications</a></li>
                </ul>
            </li>
        </ul>
      </div>
      <!-- <a href="https://cnu.edu/"><img src="cnu.png" style=float:left;width:27% ></a> -->
    <h1>AlumniReach</h1>      
  </header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="design.css">
    <h1 style="text-align: center;">Select your account type: Student or Alumni</h1>
  </head>
  <body style="text-align: center;">
  <p style="text-align: center;">Pick a user</p>
  <div class="login-form">
    <form action="" style="display: inline-block;">
      <input type="radio" id="student" name="user" value="Student">
      <label for="student">Student</label><br><br>

      <input type="radio" id="alumni" name="user" value="Alumni">
      <label for="alumni">Alumni</label><br><br>

      <input type="submit" value="Sign Up">
    </form>
    
    
    <?php
      if(isset($_POST['user'])) {
        $selected_option = $_POST['user'];
        if($selected_option == 'Student') {
          header('Location:student_sign_up.php');
          exit;
        } elseif($selected_option == 'Alumni') {
          header('Location:alumni_sign_up.php');
          exit;
        }
        else {
        header('Location:student_or_alumni.php');
        exit;
        }
      }
      ?>
  </div>
  </body>
</html>