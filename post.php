<?php
session_start();
    include "connection.php";
    include "functions.php";
    $user_data = check_login($conn);
    $id = $user_data['user_id'];
    $P_ID = $_GET['pid'];
?>

<!DOCTYPE html>
<html>
<title>Alumni Reach</title>
<head>    
  <header>
    <link rel="stylesheet" href="design.css">
    <div id="wrap">
        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li>
                <a href="#">Job</a>
                <ul>
                    <li><a href="Find Jobs.php">Find Jobs</a></li>
                    <li><a href="Add Job.php">Post a Job</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Networking</a>
                <ul>
                    <li><a href="forum.php">Advice Forum</a></li>
                    <li><a href="#">Events Page</a></li>
                </ul>
            </li>
            <li>
                <a href="login.php">Account</a>
                <ul>
                    <li><a href="login.php">Login/Create Account</a></li>
                    <li><a href="management.php">Manage Account</a></li>
                    <li><a href="account.php">Notifications</a></li>
                </ul>
            </li>
            <li>
                <a href="logout.php">Logout</a>
            </li>
        </ul>
      </div>
      <!-- <a href="https://cnu.edu/"><img src="cnu.png" style=float:left;width:27% ></a> -->
    <h1>AlumniReach-Forum</h1>      
  </header>
</head>
<body>
    <div>
        <h2>Post</h2>
        <?php
        echo "The variable value is: $P_ID";
        $forum = mysqli_query($conn, "SELECT * FROM forum_post WHERE pID = $P_ID");
        $user = mysqli_query($conn, "SELECT * FROM forum_post f JOIN alumni a ON (f.user_id=a.user_id)");
        $f_post = mysqli_fetch_array($forum);
        $user_name = mysqli_fetch_array($user);

        $post_name = $f_post['post_title'];
        $name = $user_name;
        echo "<h3>$post_name By: </h3>";

        ?>
    </div>
</body>