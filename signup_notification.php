//this code will send a notification when a student or alumni create an account 

<?php
// Worked on by Nick and Ryen
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];


// Compose confirmation email
$to = $email;
$subject = 'Confirm Your Account';
$message = "Dear $firstname $lastname,\n\n" .
           "Thank you for signing up for Alumni Reach!" .
           "If you did not sign up for our website, please ignore this email.\n\n" .
           "Best regards,\n" .
           "The Alumni Reach Team";
$headers = 'From: noreply@example.com' . "\r\n" .
           'Reply-To: noreply@example.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Send confirmation email
if (mail($to, $subject, $message, $headers)) {
    echo 'Confirmation email sent to ' . $email;
} else {
    echo 'Error sending confirmation email.';
}




?>