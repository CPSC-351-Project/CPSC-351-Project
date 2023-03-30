<?php
    session_start();
        include "connection.php";
        include "functions.php";
        $user_data = check_login($conn);
?>
<html>
<title>Lets go</title>
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
                    <li><a href="login.php">Create Account</a></li>
                    <li><a href="">Manage Account</a></li>
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

<!-- HTML form for search -->
<form method="post" action="">
    <input type="text" name="search" placeholder="Search..." required>
    <button type="submit">Search</button>
</form>
<?php

if (isset($_POST['search'])) {
    $searchTerms = $_POST['search'];
    
    // Query the database for matching rows using prepared statements
    $stmt = $conn->prepare("SELECT * FROM job_post WHERE jobDescription LIKE ?");
    $searchTerms = "%$searchTerms%";
    $stmt->bind_param("s", $searchTerms);
    $stmt->execute();
    $result = $stmt->get_result();

    if (mysqli_num_rows($result) > 0) {
        // Display the search results
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div>';
            echo '<h3>' . $row['JobName'] . '</h3>';
            echo '<p>' . $row['Location'] . '</p>';
            echo '<p>' . $row['jobDescription'] . '</p>';
            echo '<p>' . $row['JobLink'] . '</p>';
            echo '</div>';
        }
    } else {
        echo 'No results found.';
    }

    mysqli_close($conn);
}

?>
</body>
<footer>
</footer>
</html>