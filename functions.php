<?php
// Worked on by Ramsey

// checks if the user is logged in
function check_login($conn) {
    // check if session is logged in
    if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM alumni WHERE user_id = $id limit 1";
        // Query to check the user ID
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    // redirect to login page if not logged in
    header("Location: login.php");
    die;

}

// Gets the user data for the specified user
function get_userdata($conn, $user_id){
        
        $query = "SELECT * FROM alumni WHERE user_id = $user_id limit 1";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
            echo 'user data here'.$user_data['bio'];
        
        }
}
// Random number generator for IDs
function random_num($length)
{
    $text = "";
    if($length < 5)
    {
        $length = 5;
    }

    $len = rand(4,$length);

    for ($i=0; $i < $len; $i++) { 
        $text .= rand(0,9);
    }

    return $text;
}
?>
