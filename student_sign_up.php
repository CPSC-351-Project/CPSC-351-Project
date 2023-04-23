<?php
// Worked on by Ramsey and Sona
session_start();
  include "connection.php";
  include "functions.php";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    // something was posted
    // Collect information from form
    $class = 'Student';
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['pword'];
    $grad_year = $_POST['grad_year'];
    $major_1 = $_POST['major_1'];
    $major_2 = $_POST['major_2'];
    $minor_1 = $_POST['minor_1'];
    $minor_2 = $_POST['minor_2'];

    // Checks if the form is empty or not
    if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)){
        // save to database
        $user_id = random_num(10);
        $sql = "insert into alumni (user_id,class,first_name,last_name,email,pword,grad_year,major_1,major_2,minor_1,minor_2)
        values('$user_id', '$class', '$firstname', '$lastname', '$email', '$password', '$grad_year', '$major_1', '$major_2', '$minor_1', '$minor_2')";
        mysqli_query($conn, $sql);
        echo "Sign Up was successful";
        header("Location: login.php");
        die();

    }else{
        echo "Please enter some valid information";
    }
    
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up: Students</title>
    <link rel="stylesheet" href="design.css">
    <h1 style="text-align: center;">Sign Up for Student Users</h1>
  </head>
  <body style="text-align: center;">
  <p style="text-align: center;">Sign up page for student users</p>
  <div class="login-form">
    <form action="" style="display: inline-block;" method="post">
      <label for="firstname">First Name</label>
      <input type="text" id="firstname" name="firstname" required><br><br>
      
      <label for="lastname">Last Name:</label>
      <input type="text" id="lastname" name="lastname" required><br><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>

      <label for="pword">Password:</label>
      <input type="password" name="pword" id="pword" required><br><br>
      
      <label for="grad_year">Expected Graduation Year:</label>
      <input type="text" id="grad_year" name="grad_year" required><br><br>

      <!-- Major selection -->
      <label for="major_1">Select your Major:</label>
      <select name  = "major_1">
        <option disabled selected value> -- select an option -- </option>
        <?php 
        $select = "SELECT * FROM majors";
        $result = mysqli_query($conn, $select);
        while ($row = mysqli_fetch_array($result)) {
          echo '<option>'.$row['majors'].'</option>';
        }
        ?>
      </select><br><br>

      <label for="major_2">Enter your second Major (If applicable):</label>
      <select name = "major_2">
        <option disabled selected value> -- select an option -- </option>
        <option>None</option>
        <?php 
        $select = "SELECT * FROM majors";
        $result = mysqli_query($conn, $select);
        while ($row = mysqli_fetch_array($result)) {
          echo '<option>'.$row['majors'].'</option>';
        }
        ?>
      </select><br><br>

      <!-- Minor selection -->
      <label for="minor_1">Enter your Minor:</label>
      <select name = "minor_1">
        <option disabled selected value> -- select an option -- </option>
        <option>None</option>
        <?php 
        $select = "SELECT * FROM minors";
        $result = mysqli_query($conn, $select);
        while ($row = mysqli_fetch_array($result)) {
          echo '<option>'.$row['minors'].'</option>';
        }
        ?>
      </select><br><br>

      <label for="minor_2">Enter your second Minor (If applicable):</label>
      <select name = "minor_2">
        <option disabled selected value> -- select an option -- </option>
        <option>None</option>
        <?php 
        $select = "SELECT * FROM minors";
        $result = mysqli_query($conn, $select);
        while ($row = mysqli_fetch_array($result)) {
          echo '<option>'.$row['minors'].'</option>';
        }
        ?>
      </select><br><br>

      <input type="submit" value="Sign Up">
      <input type="reset">
    </form>
    <br><br>
    <a href="login.php">Back to Login Page</a>
  </div>
  </body>
</html>