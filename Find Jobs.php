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
<h2>Search for Jobs</h2>
<!-- HTML form for search -->
<form method="post" action="">
    <input type="text" name="search" placeholder="Search..." required>
    <button type="submit">Search</button>
</form>
<style>
    table {
        border-collapse: collapse;
        width:auto;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Company Name</th>
            <th>Job Name</th>
            <th>Location</th>
            <th>Job Description</th>
            <th>Job Link</th>
            <th>Date Posted</th>

            
        </tr>
    </thead>
    <tbody>
<?php

if (isset($_POST['search'])) {
    $searchTerms = $_POST['search'];
    
    // Query the database for matching rows using prepared statements
    $stmt = $conn->prepare("SELECT * FROM job_post WHERE jobDescription LIKE ? OR JobName LIKE ? OR Location LIKE ? OR Companyname LIKE ?");
    $searchTerms = "%$searchTerms%";
    $stmt->bind_param("ssss", $searchTerms, $searchTerms, $searchTerms, $searchTerms);
    $stmt->execute();
    $result = $stmt->get_result();

    if (mysqli_num_rows($result) > 0) {
        // Display the search results in a table
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['Companyname'] . '</td>';
            echo '<td>' . $row['JobName'] . '</td>';
            echo '<td>' . $row['Location'] . '</td>';
            echo '<td>' . $row['jobDescription'] . '</td>';
            echo '<td><a href="' . $row['JobLink'] . '">' . $row['JobLink'] . '</a></td>';
            echo '<td>' . $row['postDate'] . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="4">No results found.</td></tr>';
    }

    mysqli_close($conn);
}
?>
</tbody>
</table>
</body>
<footer>
</footer>
</html>