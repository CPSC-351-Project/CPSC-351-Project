<?php
session_start();
    include "connection.php";
    include "functions.php";
    $user_data = check_login($conn);
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
    <h3 class="center">Forum Post</h3>
        <table class="tableClass" style="margin: auto">
            <thead>
                <tr>
                    <td>Title</td>
                    <td>Post By</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $forum = mysqli_query($conn, "SELECT * FROM forum_post");
                    $alum = mysqli_query($conn, "SELECT * FROM alumni");
                    while($postdb = mysqli_fetch_array($forum)) {
                        $alumni = mysqli_fetch_array($alum)
                    ?>
                        <tr>
                            <td><?php echo $postdb['post_title']?></td>
                            <td><?php echo $alumni['first_name'] . " " . $alumni['last_name']?></td>
                        </tr>

                    <?php
                    }
                    mysqli_close($conn);
                    ?>
            </tbody>
        </table>
    <div class="center">
        <p class="text-align: center;">Want to make your own post?</p>
        <p class="text-align: center;"><a href="forum_post.php">Click Here</a></p>
    </div>
</body>
</html>