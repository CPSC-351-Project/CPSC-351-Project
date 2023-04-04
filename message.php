<?php
session_start();
    include "connection.php";
    include "functions.php";
    $user_data = check_login($conn);
    if (isset($_POST['message'])) {
        $message = $_POST["message"];
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Prepared statement to protect from SQLi
        $stmt = $conn->prepare("INSERT INTO messaging (message, dtsent) VALUES (?, NOW())");
        // Bind the variables to the statement
        $stmt->bind_param("s", $message);
        
        // Execute the insert statement
        if ($stmt->execute()) {
            echo "Message sent successfully!";
        } else {
            echo "Error sending message: " . $conn->error;
        }
        
        // Close the connection and statement
        $stmt->close();
    }
    
    // Query the messages from the database
    $result = $conn->query("SELECT * FROM messaging ORDER BY dtsent ASC");
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            setInterval(function(){
                $.ajax({
                    url: 'get_messages.php',
                    type: 'get',
                    success: function(response){
                        $('.messages').html(response);
                    }
                });
            }, 1000);
        });
    </script>
</head>
<body>
    <h2>Messaging</h2>
    <div style="border-style: groove;
  border-color: black;
  border-width: 3.4px;
    width:50%;background-color:#f5f5f5;">
        <?php
            // Display the messages
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<p>" . $row["dtsent"] . " - " . $row["message"] . "</p>";
                }
            } else {
                echo "No messages.";
            }
        ?>
    </div>
    <form method="post" action="">
        <div style="text-align: center;
        background-color: #004a8e;
        width: 50%;border-style: groove;
        border-color: black;
        border-width: 4x;">
            <textarea id="message" name="message" placeholder="Type Message Here!" rows="10" cols="29" required></textarea>
        </div>
        <input  type="submit" value="Send Message" style="background-color:white; color: #333; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; 
        box-shadow: 0 12px 16px 0 #0000003d, 0 17px 50px 0 rgba(0,0,0,0.19);"
        onmouseover="this.style.backgroundColor='white'; this.style.color='#013d75'; this.style.boxShadow='0 12px 16px 0 #0000003d, 0 17px 50px 0 rgba(0,0,0,0.19)';"
        onmouseout="this.style.backgroundColor='white'; this.style.color='#333'; this.style.boxShadow='0 12px 16px 0 #0000003d, 0 17px 50px 0 rgba(0,0,0,0.19)';"
        onmousedown="this.style.backgroundColor='#a3a1a1'; this.style.boxShadow='0 5px #0000003d'; this.style.transform='translateY(4px)';"
        onmouseup="this.style.backgroundColor='white'; this.style.boxShadow='0 12px 16px 0 #0000003d, 0 17px 50px 0 rgba(0,0,0,0.19)'; this.style.transform='none';"><br><br>
    </form>
</body>
<footer>
</footer>
</html>