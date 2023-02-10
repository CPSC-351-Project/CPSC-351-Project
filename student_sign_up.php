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
    <h1 style="text-align: center;">Sign Up</h1>
  </head>
  <body style="text-align: center;">
  <p style="text-align: center;">Sign up page for student users</p>
  <div class="login-form">
    <form action="" style="display: inline-block;">
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
        <option value="Accounting">Accounting</option>
        <option value="Applied Mathematics">Applied Mathematics</option>
        <option value="Art">Art</option>
        <option value="Biology">Biology</option>
        <option value="Business Administration">Business Administration</option>
        <option value="Chemistry">Chemistry</option>
        <option value="Communication Studies">Communication Studies</option>
        <option value="Computer Engineering">Computer Engineering</option>
        <option value="Computer Science">Computer Science</option>
        <option value="Cybersecurity">Cybersecurity</option>
        <option value="Economics">Economics</option>
        <option value="Electrical Engineering">Electrical Engineering</option>
        <option value="English">English</option>
        <option value="Environmental Science">Environmental Science</option>
        <option value="Film Studies">Film Studies</option>
        <option value="History">History</option>
        <option value="International Studies">International Studies</option>
        <option value="Information Science">Information Science</option>
        <option value="Mathematics">Mathematics</option>
        <option value="Music">Music</option>
        <option value="Philosophy">Philosophy</option>
        <option value="Physics">Physics</option>
        <option value="Political Science">Political Science</option>
        <option value="Psychology">Psychology</option>
        <option value="Sociology">Sociology</option>
        <option value="Theatre Arts">Theatre Arts</option>
        <option value="Women's and Gender Studies">Women's and Gender Studies</option>
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