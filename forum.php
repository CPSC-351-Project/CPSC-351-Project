<?php
// Worked on by Ramsey
session_start();
    include "connection.php";
    include "functions.php";
    $user_data = check_login($conn);
?>

<!DOCTYPE html>
<html>
<title>Forum Page</title>
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
                  <li><a href="event_table.php">Events Page</a></li>
              </ul>
          </li>
          <li>
              <a href="login.php">Account</a>
              <ul>
                  <li><a href="login.php">Login/Create Account</a></li>
                  <li><a href="management.php">Manage Account</a></li>
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
    <h3>Forum Post</h3>
    <p>Click on the title to see the full post and replies</p>
        <table class="tableClass" style="margin: auto">
            <thead>
                <tr>
                    <td>Title</td>
                    <td>Post By</td>
                    <td>Date Posted</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $forum = mysqli_query($conn, "SELECT * FROM forum_post");
                    $alum = mysqli_query($conn, "SELECT * FROM forum_post f JOIN alumni a ON (f.user_id=a.user_id)");
                    // Loops throughout the database prints out all the post
                    while($postdb = mysqli_fetch_array($forum)) {
                        $alumni = mysqli_fetch_array($alum);
                        $postID = $postdb['pID'];
                        $post_title = $postdb['post_title'];
                        $p_date = $postdb['post_date'];
                        $Fname = $alumni['first_name'];
                        $Lname = $alumni['last_name'];
                        $uID = $alumni['user_id'];

                        // The table row contains the post data. Users can click the post title to see the full post.
                        // Users can also click the name to see the account of the user who mad the post.
                        echo "<tr>";
                            echo "<td><a class='link' href='post.php?pID=$postID'>$post_title</a></td>";
                            echo "<td><a class='link' href='view_user.php?uID=$uID'>$Fname $Lname</a></td>";
                            echo "<td> $p_date</td>";
                        echo "</tr>";
                    }
                    mysqli_close($conn);
                    ?>
            </tbody>
        </table>
    <div>
        <!-- Allows user to make their own posts -->
        <p class="text-align: center;">Want to make your own post?</p>
        <p class="text-align: center;"><a class="link" href="forum_post.php">Click Here</a></p>
    </div>
</body>
</html>