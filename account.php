<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumnireach";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['firstName'])) {
    echo 'bagggggga';
    if (isset($_POST['firstName'])) {
        $fname = $_POST['firstName'];
    }
    if (isset($_POST['lastName'])) {
        $lname = $_POST['lastName'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }
    
    if (isset($fname) and isset($lname) and isset($email) and isset($username) and isset($password)) {
		echo 'banana';
		$sql = "INSERT INTO accounts (fname, lname, email, username, password)
        VALUES ('John', 'Doe', 'john@example.com', 'john123', 'password1')";


        if (mysqli_query($conn, $sql)) {
            $message = '<p>New record was created successfully</p>';
        } else {
            $message = '<p>Error:' . $sql . mysqli_error($conn).'</p>';
        }
  
    }

}
// End - if ($_SERVER['REQUEST_METHOD'] ==='POST')

?>

<!DOCTYPE html>
<html>
<head>
<header>
        <link rel="stylesheet" href="design.css">
        <div id="wrap">
            <ul class="navbar">
              <li><a href="index.php">Home</a></li>
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
                  <li><a href="#">Manage Account</a></li>
                  <li><a href="#">Notifications</a></li>
                </ul>
              </li>
            </ul>
          </div>
          
        <!-- <a href="https://cnu.edu/"><img src="cnu.png" style=float:left;width:27% ></a> -->
    </header>
  <link rel="stylesheet" href="design.css">
</head>
<body>
  <title>Login Here</title>
  <form class="myform">
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname">

    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lname">

    <label for="email">Email:</label>
    <input type="text" id="email" name="email">

    <label for="username">Create a username:</label>
    <input type="text" id="username" name="username">

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">

    <input type="submit" value="Register" name="Submit">
    <div id="error"><?php echo isset($message) ? $message : '' ?></div>
  </form>



</body></html>


