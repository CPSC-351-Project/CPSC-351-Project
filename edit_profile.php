<?php

session_start();
include "connection.php";
include "functions.php";
$user_id_to_get=$_SESSION['user_id'];
$user_data = check_login($conn, $user_id_to_get);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $job = $_POST['job'];
    $bio = $_POST['bio'];
    $phone_num = $_POST['phone'];
    $address = $_POST['address'];

    $query = "UPDATE alumni SET first_name='$first_name', last_name='$last_name', email='$email', job='$job', bio='$bio', phone_num='$phone_num', address='$address' WHERE user_id=".$_SESSION['user_id'];
    if(mysqli_query($conn, $query)) {
        echo "Profile updated successfully";
        
    } else {
        echo "Failed to update profile";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alumni Reach</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <header>
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
                        <li><a href="#">Events Page</a></li>
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
        <h1>AlumniReach</h1>
    </header>

    <div align="center">
        <div class="row">
            <form action="" method="POST" style="max-width: 600px; margin: 0 auto; padding: 20px; padding-top: 0px; background-color: white;">
                <div class="form-group">
                    <h1>Edit your Account here</h1>
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" class="form-control" value="<?php echo $user_data['first_name'];?>"><br><br>
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" class="form-control" value="<?php echo $user_data['last_name'];?>"><br><br>
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $user_data['email'];?>"><br><br>
                    <label for="job">Position title</label>
                    <input type="text" name="job" class="form-control" value="<?php echo $user_data['job'];?>"><br><br>
                    <label for="bio">Bio</label>
                    <textarea name="bio" class="form-control" rows="2"> <?php echo $user_data['bio'];?></textarea><br><br>
                    <label for="phone">Phone number</label>
                    <input type="text" name="phone" class="form-control" value="<?php echo $user_data['phone_num'];?>"><br><br>
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" value="<?php echo $user_data['address'];?>"><br><br>
                    <a href="management.php"><input type="submit" name="edit_profile" value="update changes">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
