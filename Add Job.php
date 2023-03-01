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
                                <li><a href="Find Jobs.html">Find Jobs</a></li>
                                <li><a href="Add Job.html">Post a Job</a></li>
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
                                <li><a href="student_or_alumni.php">Create Account</a></li>
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
    

        
        <h2><u>Post A Job</u></h2>
            <form action="" method="POST">
                <label for="JobName">Enter Job Name:</label><br>
                <input type="text" id="JobName" name="JobName" required><br><br>

                <label for="CompanyName">Enter Company Name:</label><br>
                <input type="text" id="CompanyName" name="CompanyName" required><br><br>

                <label for="Description">Description:</label><br>
                <textarea id="Description" name="Description" rows= 5 cols=40 required></textarea><br><br>

                <input type="submit" value="Submit"><br><br>
            </form>

            <?php
            if (isset($_POST['JobName'], $_POST['CompanyName'], $_POST['Description'])) {
                $jobname = $_POST["JobName"];
                $companyname = $_POST["CompanyName"];
                $jobDescription = $_POST["Description"];
            
                // Connect to the database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "alumnireach";
                $conn = new mysqli($servername, $username, $password, $dbname);
            
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
            
                // Prepare and bind the insert statement
                $stmt = $conn->prepare("INSERT INTO job_post (JobName, CompanyName, jobDescription, postDate) VALUES (?, ?, ?, NOW())");
                $stmt->bind_param("sss", $jobname, $companyname, $jobDescription);
            
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


        
            
        
            
    
    </body>
    <footer>
    </footer>
</html>