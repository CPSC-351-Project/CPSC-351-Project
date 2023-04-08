<?php

// Database connection
$hostname = "localhost";
$username = "root";
$password = "root";
$db = "alumnireach";
$conn = new mysqli($hostname, $username, $password, $db) or die("Connect failed: %s\n". $conn -> error);

?>