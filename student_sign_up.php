<?php 


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <h1>Sign Up</h1>
  </head>
  <body>
  <p>Sign up page for students</p>
  <div class="login-form">
    <form action="">
      <label for="firstname">First Name</label>
      <input type="text" id="firstname" name="firstname" required><br><br>
      
      <label for="lastname">Last Name:</label>
      <input type="text" id="lastname" name="lastname" required><br><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      
      <label for="email">Expected Graduation Year:</label>
      <input type="text" id="email" name="email" required><br><br>

      <!-- Add a dropdown menu for Major -->
      <label for="major">Major:</label>
      <input type="text" id="major" name="major" required><br><br>

      <!-- Add a dropdown menu for Minor -->
      <label for="minor">Minor:</label>
      <input type="text" id="minor" name="minor" required><br><br>

      <input type="submit" value="Login">
    </form>
  </div>
  </body>
</html>