$servername = "localhost"; 
$username = "username";
$password = "password";
$dbname = "alumni_reach"

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
	die("connection failed: " . mysqli_connect_error());
}
// email subject and headers 
$subject = "New message received"; 
$message = "You have recieved a new message in your inbox";
