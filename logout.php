<?php
// Worked on by Ramsey

/* When the user clicks on the logout link the user id will be unset
and the user will be sent to the login page and have to be logged back in */
session_start();

if(isset($_SESSION['user_id'])){
    unset($_SESSION['user_id']);

}

header("Location: login.php");
die();

?>