<?php
session_start();
    include "connection.php";
    include "functions.php";
    $user_data = check_login($conn);
    $id = $user_data['user_id'];

    if(isset($_GET['pID'])) {
        // code to execute if the variable is set
        $post_ID = $_GET['pID'];
    } else {
        // code to execute if the variable is not set
        $post_ID = "Post Id is not set";
    }
    // echo $post_ID;
?>
<!DOCTYPE html>
<html>
<title>Forum Post</title>
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
    <div>
        <h2>Post</h2>
        <?php
        $forum = mysqli_query($conn, "SELECT * FROM forum_post WHERE pID = $post_ID");
        $user = mysqli_query($conn, "SELECT * FROM forum_post f JOIN alumni a ON (f.user_id=a.user_id) WHERE pID = $post_ID");
        $f_post = mysqli_fetch_array($forum);
        $user_name = mysqli_fetch_array($user);

        $post_name = $f_post['post_title'];
        $post_desc = $f_post['post_description'];

        $f_name = $user_name['first_name'];
        $l_name = $user_name['last_name'];
        ?>
        <h3><?php echo "Post Title: $post_name"?></h3>
        <h3><?php echo "By: $f_name $l_name"?></h3>
        <p style='text-align: center'><?php echo $post_desc ?></p>


        <h4>Add a Reply</h4>
        <form style="display: inline-block;" method="post">
            <label for="reply"></label>
            <textarea name="reply" id="reply" cols="50" rows="4"></textarea><br>
            <input type="submit" name="submit" value="Reply">
            <input type="reset" value="Clear">
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                // something was posted
                // Collect information from form
                $reply = $_POST['reply'];

                if(isset($_POST['submit'])){
                    // Checks if the form is empty or not
                    if(!empty($reply)){
                        // save to database
                        $reply_id = random_num(10);
                        $sql = "INSERT INTO forum_reply (rID, pID, user_id, reply, reply_date) 
                        VALUES ('$reply_id', '$post_ID', '$id', '$reply', NOW())";
                        mysqli_query($conn, $sql);
                        echo "Reply created successfully";
                        header("Location: forum.php");
                        // header("Location: post.php?pID=$postID");
                        exit();
                    }else{
                        echo "Please enter some valid information";
                    }
                }
            }
        ?>
    </div>
    <div>
        <h4>Replies</h4>
            <table class="tableClass" style="margin: auto">
                <tbody>
                <?php
                    $reply_query = mysqli_query($conn, "SELECT * FROM forum_reply WHERE pID = $post_ID");
                    while($replyDB = mysqli_fetch_array($reply_query)){
                        $user_reply = $replyDB['reply'];
                        $reply_date = $replyDB['reply_date'];
                        echo "<tr>";
                        echo "<td>$user_reply</td>";
                        echo "<td>By: $f_name $l_name</td>";
                        echo "<td>$reply_date</td>";
                        echo "</tr>";
                    }
                    $conn->close();
                ?>
                </tbody>
            </table>
    </div>
    <div>
        <p class="text-align: center;"><a class="link" href="forum.php">Go to Forum Home</a></p>
    </div>
</body>
</html>