<?php

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
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
      
      <label for="grad_year">Expected Graduation Year:</label>
      <input type="text" id="grad_year" name="grad_year" required><br><br>

      <!-- Major selection -->
      <label for="major_1">Select your Major:</label>
      <select>
        <option>Select</option>
        <?php 
        $select = "SELECT * FROM majors";
        $result = mysqli_query($conn, $select);
        while ($row = mysqli_fetch_array($result)) {
          echo '<option>'.$row['majors'].'</option>';
        }
        ?>
      </select><br><br>

      <label for="major_2">Enter your second Minor (If applicable):</label>
      <select>
        <option>Select</option>
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
      <select>
        <option>Select</option>
        <?php 
        $select = "SELECT * FROM minors";
        $result = mysqli_query($conn, $select);
        while ($row = mysqli_fetch_array($result)) {
          echo '<option>'.$row['minors'].'</option>';
        }
        ?>
      </select><br><br>

      <label for="minor_2">Enter your second Minor (If applicable):</label>
      <select>
        <option>Select</option>
        <?php 
        $select = "SELECT * FROM minors";
        $result = mysqli_query($conn, $select);
        while ($row = mysqli_fetch_array($result)) {
          echo '<option>'.$row['minors'].'</option>';
        }
        ?>
      </select><br><br>

      <input type="submit" value="Sign Up">
    </form>
  </div>
  </body>
</html>