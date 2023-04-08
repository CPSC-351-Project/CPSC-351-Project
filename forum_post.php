<?php
session_start();
    include "connection.php";
    include "functions.php";
    $user_data = check_login($conn);
    $id = $user_data['user_id'];
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
                    <li><a href="message.php">Messaging</a></li>
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
    <h1>AlumniReach</h1>      
  </header>
</head>
<body>
    <div class="login-form">    
        <h3>New Post</h3>
            <form style="display: inline-block;" method="post">
            <label for="title">Title</label><br>
            <input type="text" id="title" name="title" required><br><br>

            <label for="post">Post</label><br>
            <textarea name="post" id="post" cols="80" rows="10"></textarea><br><br>

            <input type="submit" name="submit" value="Post">
            <input type="reset">
            </form> 
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                // something was posted
                // Collect information from form
                $title = $_POST['title'];
                $post = $_POST['post'];
        
                if(isset($_POST['submit'])){
                    // Checks if the form is empty or not
                    if(!empty($title) && !empty($post)){
                        // save to database
                        $post_id = random_num(10);
                        $sql = "INSERT INTO forum_post (pID, user_id, post_title, post_description, post_date) 
                        VALUES ('$post_id', $id, '$title', '$post', NOW())";
                        mysqli_query($conn, $sql);
                        echo "Post created successfully";
                        header("Location: forum.php");
                        exit();
                    }else{
                        echo "Please enter some valid information";
                    }
                }
             }
        ?>
    </div>   
</body>
</html>