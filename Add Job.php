<?php
    session_start();
        include "connection.php";
        include "functions.php";
        $user_data = check_login($conn);

        if (isset($_POST['JobName'], $_POST['CompanyName'], $_POST['Description'], $_POST['JobLink'], $_POST['Location'])) {
            $jobname = $_POST["JobName"];
            $companyname = $_POST["CompanyName"];
            $jobDescription = $_POST["Description"];
            $jobLink = $_POST["JobLink"];
            $location = $_POST["Location"];
        
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        
            // Preppared statement to protect from SQLi
            $stmt = $conn->prepare("INSERT INTO job_post (JobName, CompanyName, jobDescription, JobLink, Location, postDate) VALUES (?, ?, ?, ?, ?, NOW())");
            // Bind the variables to the statement
            $stmt->bind_param("sssss", $jobname, $companyname, $jobDescription, $jobLink, $location);
        
            // Execute the insert statement
            if ($stmt->execute()) {
                header("Location: Job_Submitted.html");
                exit();
            } else {
                echo "Error posting job: " . $conn->error;
            }
        
            // Close the connection and statement
            $stmt->close();
            $conn->close();
        }
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
        <h2><u>Post A Job</u></h2>
        <form action="" method="POST">
            <label for="JobName">Enter Job Name:</label><br>
            <input type="text" id="JobName" name="JobName" required><br><br>

            <label for="CompanyName">Enter Company Name:</label><br>
            <input type="text" id="CompanyName" name="CompanyName" required><br><br>

            <label for="Location">Enter Job Location:</label><br>
            <input type="test" id="Location" name="Location" required><br><br>

            <label for="Description">Description:</label>
            <p>Please provide a brief description of the job, the recommended major(s), the job location, salary or wage, and any other information needed for the applicant!</p>

            <textarea id="Description" name="Description" rows= 5 cols=40 wrap="hard" required></textarea><br><br>

            <label for="JobLink">Enter Job Link:</label><br>
            <input type="url" id="JobLink" name="JobLink" required><br><br>


            <input type="submit" value="Submit"><br><br>
            </form>

   
            
        
            
    
    </body>
    <footer>
    </footer>
</html>