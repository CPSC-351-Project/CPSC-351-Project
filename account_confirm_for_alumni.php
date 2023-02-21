<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // SQL Database connection
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "351project";

        $conn = mysqli_connect($server, $username, $password, $dbname);

        // Check if the connection was successful
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
         
        // Collect information from form
        $firstname = $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];
        $email = $_REQUEST['email'];
        $grad_year = $_REQUEST['grad_year'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO college  VALUES ('$firstname',
            '$lastname','$email','$grad_year')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Account made successfully! \nWelcome $firstname $lastname! You may return home</h3>";
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>