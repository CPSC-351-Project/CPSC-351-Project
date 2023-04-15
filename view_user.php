<?php
session_start();
    include "connection.php";
    include "functions.php";
    $user_data = check_login($conn);
    $id = $user_data['user_id'];

    if(isset($_GET['uID'])) {
        // code to execute if the variable is set
        $u_ID = $_GET['uID'];
    } else {
        // code to execute if the variable is not set
        $u_ID = "User ID is not set";
    }
    // echo $u_ID;
?>
<!DOCTYPE html>
<html>
<title>User Page</title>
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
<h2>User Profile</h2>
<body>
    <?php
    $forum = mysqli_query($conn, "SELECT * FROM forum_post WHERE user_id = $u_ID");
    $user = mysqli_query($conn, "SELECT * FROM alumni WHERE user_id = $u_ID");
    $user_name = mysqli_fetch_array($user);

    // From User Table
    $f_name = $user_name['first_name'];
    $l_name = $user_name['last_name'];
    $email = $user_name['email'];
    $class = $user_name['class'];
    $grad_year = $user_name['grad_year'];
    $major_1 = $user_name['major_1'];
    $major_2 = $user_name['major_2'];
    $minor_1 = $user_name['minor_1'];
    $minor_2 = $user_name['minor_2'];
    $job = $user_name['job'];
    $bio = $user_name['bio'];

    ?>
    <main>
		<section class="#">
			<h1>Profile Information</h1>
			<ul>
				<li><strong>Name:</strong> <?php echo "$f_name" . " " . "$l_name";?></li>
				<li><strong>Email:</strong> <?php echo "$email;"?></li>
				<li><strong>Bio:</strong> <?php echo "$bio";?></li>
			</ul>
		</section>
		<section class="post-list">
			<h1>Posts</h1>
            <?php
            while($f_post = mysqli_fetch_array($forum)){
                $p_title = $f_post['post_title'];
                $p_date = $f_post['post_date'];
                $p_desc = $f_post['post_description'];
            ?>
			<ul>
				<li>
					<h3>Title: <?php echo "$p_title";?></h3>
					<p>Description: <?php echo "$p_desc";?></p>
					<span>Posted on: <?php echo "$p_date";?></span>
				</li>
            </ul>
            <?php
            }
            mysqli_close($conn);
            ?>
		</section>
	</main>
</body>
<footer>
</footer>
</html>