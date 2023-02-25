<!DOCTYPE html>
<html>
 
<head>
    <title>Welcome!</title>
</head>
 
<body>
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
    
    if(isset($_POST['submit']))
    {
        // Collect information from form
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $grad_year = $_POST['grad_year'];

        if(mysqli_query($conn, "insert into alumni_accounts (firstname,lastname,email,grad_year) 
        values('$firstname','$lastname','$email','$grad_year')"));{
            echo "<h3>Account made successfully! \nWelcome $firstname $lastname! You may return home</h3>";
        }

    }
    else
    {
        echo "Please fill in the blanks";
    }
        
    // Close connection
    mysqli_close($conn);
    ?>
</body>
 
</html>