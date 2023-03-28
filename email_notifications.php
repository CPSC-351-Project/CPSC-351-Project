<?php

// Database connection
$hostname = "localhost";
$username = "root";
$password = "";
$db = "alumnireach";
$conn = new mysqli($hostname, $username, $password, $db) or die("Connect failed: %s\n". $conn -> error);

// email subject and headers 
$subject = "New message received"; 
$message = "You have recieved a new message in your inbox";

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $sender_name = $_POST['sender_name'];
    $recipient_email = $_POST['recipient_email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Insert the message into the database
    $sql = "INSERT INTO messages (sender_name, recipient_email, subject, message) VALUES ('$sender_name', '$sender_email', '$recipient_email', '$subject', '$message')";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        // Send the email to the recipient
        $to = $recipient_email;
        $subject = "New Message from $sender_name";
        $body = "You have received a new message from $sender_name:\n\n$message";
        $headers = "From: $sender_email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Message delivery failed!";
        }
    } else {
        echo "Message insertion failed!";
    }
}

// Close the database connection
mysqli_close($conn);

?>
