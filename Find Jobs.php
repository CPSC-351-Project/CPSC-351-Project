<?php
    session_start();
        include "connection.php";
        include "functions.php";
        $user_data = check_login($conn);

// Check if the form was submitted
if (isset($_POST['search'])) {
    // Retrieve the search terms from the form
    $searchTerms = $_POST['search'];          

    // Connection was referenced in the include
    // Query the database for matching rows
    $query = "SELECT * FROM job_post WHERE jobDescription LIKE '%{$searchTerms}%'";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if any rows were found
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

    // Close the database connection
    mysqli_close($conn);
}
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
                    <li><a href="#">Advice Forum</a></li>
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
        </ul>
      </div>
      <!-- <a href="https://cnu.edu/"><img src="cnu.png" style=float:left;width:27% ></a> -->
    <h1>AlumniReach</h1>      
  </header>
</head>
<body>

<!-- HTML form for search -->
<form method="post" action="">
    <input type="text" name="search" placeholder="Search...">
    <button type="submit">Search</button>
</form>

</body>
<footer>
</footer>
</html>