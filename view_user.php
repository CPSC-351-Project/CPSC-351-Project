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
<h3>User Profile</h3>
<body>
    <?php
    $forum = mysqli_query($conn, "SELECT * FROM forum_post WHERE pID = $u_ID");
    $user = mysqli_query($conn, "SELECT * FROM forum_post f JOIN alumni a ON (f.user_id=a.user_id) WHERE pID = $u_ID");
    $f_post = mysqli_fetch_array($forum);
    $user_name = mysqli_fetch_array($user);

    $f_name = $user_name['first_name'];

    ?>
    <main>
		<section class="#">
			<h1>Profile Information</h1>
			<ul>
				<li><strong>Name:</strong> <?php echo $f_name?></li>
				<li><strong>Email:</strong> johndoe@example.com</li>
				<li><strong>Location:</strong> Los Angeles, CA</li>
				<li><strong>Interests:</strong> Music, movies, sports</li>
				<li><strong>Bio:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel justo id ex sollicitudin venenatis vel vel nisi.</li>
			</ul>
			<a href="edit-profile.php">Edit Profile</a>
		</section>
		<section class="friend-list">
			<h2>Friends</h2>
			<ul>
				<li><a href="#">Friend 1</a></li>
				<li><a href="#">Friend 2</a></li>
				<li><a href="#">Friend 3</a></li>
				<li><a href="#">Friend 4</a></li>
				<li><a href="#">Friend 5</a></li>
			</ul>
		</section>
		<section class="post-list">
			<h2>Posts</h2>
			<ul>
				<li>
					<h3>Post Title</h3>
					<p>Post content goes here.</p>
					<span>Posted on: June 1, 2022</span>
				</li>
				<li>
					<h3>Post Title</h3>
					<p>Post content goes here.</p>
					<span>Posted on: May 15, 2022</span>
				</li>
				<li>
					<h3>Post Title</h3>
					<p>Post content goes here.</p>
					<span>Posted on: April 25, 2022</span>
				</li>
			</ul>
		</section>
	</main>
	<footer>
		<!-- Add footer content here -->
	</footer>
</body>
<footer>
</footer>
</html>