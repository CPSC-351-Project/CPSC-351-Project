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
    <form action="" style="display: inline-block;">
      <label for="firstname">First Name</label>
      <input type="text" id="firstname" name="firstname" required><br><br>
      
      <label for="lastname">Last Name:</label>
      <input type="text" id="lastname" name="lastname" required><br><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      
      <label for="grad_year">Graduation Year:</label>
      <input type="text" id="grad_year" name="grad_year" required><br><br>
      
      <input type="submit" value="Sign Up">
    </form>
    <?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "alumnireach";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname); 
	
	if ($conn->connect_error) {
    die("bad connection: ".mysqli_connect_error());
}
  ?>
  </div>
  </body>
</html>