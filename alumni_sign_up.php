<?php
session_start();
  include "connection.php";
  include "functions.php";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    // something was posted
    // Collect information from form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['pword'];
    $grad_year = $_POST['grad_year'];
    $major_1 = $_POST['major_1'];
    $major_2 = $_POST['major_2'];
    $minor_1 = $_POST['minor_1'];
    $minor_2 = $_POST['minor_2'];
    $job = $_POST['job'];

    if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)){
        // save to database
        $user_id = random_num(10);
        $sql = "insert into alumni (user_id,first_name,last_name,email,pword,grad_year,major_1,major_2,minor_1,minor_2,job)
        values('$user_id', '$firstname', '$lastname', '$email', '$password', '$grad_year', '$major_1', '$major_2', '$minor_1', '$minor_2', '$job')";
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
    <title>Sign Up</title>
    <link rel="stylesheet" href="design.css">
    <h1 style="text-align: center;">Sign Up for Alumni Users</h1>
  </head>
  <body style="text-align: center;">
  <p style="text-align: center;">Sign up page for alumni users</p>
  <div class="login-form">
    <form style="display: inline-block;" method="post">
      <label for="firstname">First Name</label>
      <input type="text" id="firstname" name="firstname" required><br><br>
      
      <label for="lastname">Last Name:</label>
      <input type="text" id="lastname" name="lastname" required><br><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>

      <label for="pword">Password:</label>
      <input type="password" name="pword" id="pword" required><br><br>
      
      <label for="grad_year">Graduation Year:</label>
      <input type="number" id="grad_year" name="grad_year" required><br><br>

      <label for="major_1">What was your Major:</label>
      <select name = "major_1">
        <option disabled selected value> -- select an option -- </option>
        <?php 
        $select = "SELECT * FROM majors";
        $result = mysqli_query($conn, $select);
        while ($row = mysqli_fetch_array($result)) {
          echo '<option>'.$row['majors'].'</option>';
        }
        ?>
      </select><br><br>

      <label for="major_2">What was your second Major(if applicable):</label>
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

      <label for="minor_1">What was your Minor:</label>
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

      <label for="minor_2">What was your second Minor(if applicable):</label>
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
      
      <label for="job">Job Title</label>
      <input type="text" name="job" id="job"><br><br>

      <input type="submit" value="Sign Up">
      <input type="reset">
    </form>
  </div>
  </body>
</html>