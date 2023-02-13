<!DOCTYPE html>
<html lang="en">
  <head>
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
      <input type="radio" id="student" name="student" value="Student" required>
      <label for="student">Student</label><br><br>

      <input type="radio" id="alumni" name="alumni" value="Alumni" required>
      <label for="alumni">Alumni</label><br><br>

      <input type="submit" value="Sign Up">
      
      <?php
      $student = $_POST["student"];
      $alumni = $_POST["alumni"];

      /*
      if (isset($student)){
          header();
      }*/
      ?>
      
    </form>
  </div>
  </body>
</html>