<?php
    session_start();
    include "connection.php";
    include "functions.php";
    $user_data = check_login($conn);
    $id = $user_data['user_id'];

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $eventDate = $_POST["eventDate"];
        $eventName = $_POST["eventName"];
        $eventTime = $_POST["eventTime"];
        $eventDescription = $_POST["eventDescription"];
        $eventLocation = $_POST["eventLocation"];

        // Use prepared statement with placeholders
        $sql = "INSERT INTO events (eID, user_id, eventDate, eventName, eventTime, eventDescription, eventLocation) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $eID = random_num(10);
        $stmt->bind_param("issssss", $eID, $id, $eventDate, $eventName, $eventTime, $eventDescription, $eventLocation);
        $stmt->execute();

        // Close the statement
        $stmt->close();

        // Close the connection
        $conn->close();

        // Redirect and exit
        header("Location: event.php");
        exit();
    }
?>
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
                    <li><a href="#">Advice Forum</a></li>
                    <li><a href="event.php">Events Page</a></li>
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

        <form action="" method="POST" style="max-width: 600px; margin: 0 auto; padding: 20px; padding-top: 0px; background-color: white;">
            <div class="form-group">
                <h2><u>Add an Event!!!</u></h2>
                <label for="eventDate">When is the event:</label>
                <input type="date" id="eventDate" class="form-control" name="eventDate" required><br><br>

                <label for="eventName">Event Name:</label><br>
                <input type="text" id="eventName" class="form-control" name="eventName" required><br><br>

                <label for="eventTime">What time is the event:</label>
                <input type="time" id="eventTime" class="form-control" name="eventTime" required><br><br>

                <label for="eventDescription">Enter event description:</label><br>
                <textarea id="eventDescription" class="form-control" name="eventDescription" rows="2" cols="40" wrap="hard" required></textarea><br><br>

                <label for="eventLocation">Location of the event:</label><br>
                <input type="text" id="eventLocation" class="form-control" name="eventLocation" required><br><br>

                <input type="submit" value="Submit"> &nbsp;
                <button onclick="window.location.href='event_table.php'">Back</button>
            </div>
        </form>  
    
    </body>
    <footer>
    </footer>
</html>
