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
    <form action="account_confirm_for_alumni.php" style="display: inline-block;">
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
    // // SQL Database connection
    // $server = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "351project";

    // $conn = mysqli_connect($server, $username, $password, $dbname);

    // // Check if the connection was successful
    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }

    // // Collect information from form
    // $firstname = $_POST['firstname'];
    // $lastname = $_POST['lastname'];
    // $email = $_POST['email'];
    // $grad_year = $_POST['grad_year'];

    // // Escape the username and password to prevent SQL injection attacks
    // $firstname = mysqli_real_escape_string($conn, $firstname);
    // $lastname = mysqli_real_escape_string($conn, $lastname);
    // $email = mysqli_real_escape_string($conn, $email);
    // $grad_year  = mysqli_real_escape_string($conn, $grad_year);
    
    // // Add the form information to the database
    // $insert_firstname = "INSERT INTO `alumni_accounts`(`firstname`) VALUES ('$firstname');";
    // mysqli_query($conn, $insert_firstname);
    // $insert_lastname = "INSERT INTO `alumni_accounts`(`lastname`) VALUES ('$lastname');";
    // mysqli_query($conn, $insert_lastname);
    // $insert_email = "INSERT INTO `alumni_accounts`(`email`) VALUES ('$email');";
    // mysqli_query($conn, $insert_email);
    // $insert_year = "INSERT INTO `alumni_accounts`(`grad_year`) VALUES ('$grad_year');";
    // mysqli_query($conn, $insert_year);
    // $conn->close();
    ?>
  </div>
  </body>
</html>