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

      <!-- Major selection -->
      <label for="major">Select your Major:</label>
      <select name="major" id="major" required>
        <option value="pick_one">*Select a Major*</option>
        <option value="Physics">Physics</option>
        <option value="Computer Engineering">Computer Engineering</option>
        <option value="Computer Science">Computer Science</option>
        <option value="Cybersecurity">Cybersecurity</option>
        <option value="Electrical Engineering">Electrical Engineering</option>
        <option value="Information Science">Information Science</option>
      </select><br><br>

      <label for="major">Enter your second Minor (If applicable):</label>
      <input type="text" id="major" name="major" required><br><br>

      <!-- Minor selection -->
      <label for="minor">Enter your Minor:</label>
      <input type="text" id="minor" name="minor" required><br><br>

      <label for="minor">Enter your second Minor (If applicable):</label>
      <input type="text" id="minor" name="minor"><br><br>

      <input type="submit" value="Login">
    </form>
  </div>
  </body>
</html>