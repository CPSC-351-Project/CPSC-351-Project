<html>
<title>Lets go</title>
<head>    
  <header>
    <link rel="stylesheet" href="design.css">
    <div id="wrap">
        <ul class="navbar">
            <li><a href="index.html">Home</a></li>
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
   <?php
        $jobname = $_POST["JobName"];
        $companyname = $_POST["Companyname"];
        $jobDescription = $_POST["Description"];

        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "alumnireach";
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Insert the data into the database
        $sql = "INSERT INTO job post (JobName, Companyname, Description) VALUES ('$jobname', '$companyname', '$jobDescription')";

        $conn->query($sql);
        $conn->close();
        ?>


    
        <h2><u>Post A Job</u></h2>
        <form action="Job_Submitted.html" method="POST" >
            <label for="JobName">Enter Job Name:</label><br>
            <input type="text" id="JobName" name="JobName"><br><br>

            <label for="CompanyName">Enter Company Name:</label><br>
            <input type="text" id="CompanyName" name="CompanyName" ><br><br>
            
            <label for="Description">Description:</label><br>
            <textarea id="Description" name="Description" rows= 5 cols=40></textarea><br><br>

            <input type="submit" value="Submit"><br><br>          
        </form>


    
        
    
        
   
</body>
<footer>
</footer>
</html>