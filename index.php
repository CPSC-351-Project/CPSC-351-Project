<?php
session_start();
    include "connection.php";
    include "functions.php";
    $user_data = check_login($conn);

?>

<!DOCTYPE html>
<html>
<header>
  <link rel="stylesheet" href="design.css">
  <div id="wrap">
    <ul class="navbar">
      <li>
        <a href="index.php">Home</a>
      </li>
      <li>
        <a href="#">Job</a>
        <ul>
          <li>
            <a href="Find Jobs.php">Find Jobs</a>
          </li>
          <li>
            <a href="Add Job.php">Post a Job</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#">Networking</a>
        <ul>
          <li>
            <a href="#">Advice Forum</a>
          </li>
          <li>
            <a href="#">Events Page</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="login.php">Account</a>
        <ul>
          <li>
            <a href="login.php">Login/Create Account</a>
          </li>
          <li>
            <a href="">Manage Account</a>
          </li>
          <li>
            <a href="account.php">Notifications</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="logout.php">Logout</a>
      </li>
    </ul>
  </div><!-- <a href="https://cnu.edu/"><img src="cnu.png" style=float:left;width:27% ></a> -->
  <h1>AlumniReach</h1>
</header>
<body>
<h4>Hello, <?php echo $user_data['first_name']; echo " "; echo $user_data['last_name']; ?>! Welcome to Alumni Reach!</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia sagittis pharetra. Quisque lacinia nibh dolor, quis tristique ante posuere quis. Etiam pellentesque massa id erat luctus, ut hendrerit lectus efficitur. Sed ante lacus, molestie egestas justo posuere, cursus vehicula est. Duis tincidunt molestie lectus sit amet pulvinar. Aliquam quam lectus, consequat id vestibulum hendrerit, ultricies at orci. Sed eget eleifend odio. Cras tellus velit, elementum vel blandit a, venenatis id enim. Pellentesque quis velit facilisis arcu egestas aliquam et quis dolor. Suspendisse potenti. Aliquam accumsan, felis sit amet fringilla venenatis, nisl orci euismod justo, ac tristique nulla ligula ac nibh. Pellentesque aliquet placerat faucibus.<br>
<br>
Ut dignissim ultricies felis vel lobortis. Curabitur egestas metus nec nulla mattis dictum. Morbi ullamcorper nunc id dolor tristique, tempus commodo nunc tristique. Pellentesque tempor fermentum purus sed convallis. Donec eleifend ligula urna. Proin mollis fermentum ligula, feugiat vestibulum dolor. Etiam ultrices ex sed congue suscipit. Donec vulputate ac neque a blandit. Vivamus vel purus malesuada, vestibulum elit et, cursus odio. Suspendisse faucibus scelerisque rhoncus. Proin in nunc faucibus ipsum semper dapibus.<br>
<br>
Phasellus id ipsum nec nisi congue imperdiet. Nulla non nibh dui. Vivamus viverra metus sit amet pellentesque iaculis. Praesent in risus imperdiet metus faucibus pretium. Praesent finibus ligula vel euismod vulputate. Etiam a justo nisi. Pellentesque id convallis lacus. Phasellus sit amet suscipit quam, quis consequat magna. Proin in suscipit urna.<br>
<br>
In venenatis justo sem, nec imperdiet enim ullamcorper a. Morbi in turpis in metus tempus dapibus ac ornare est. Nunc sit amet lectus sem. Duis et ligula pellentesque, tempus velit a, posuere tellus. Vestibulum cursus massa libero. Duis molestie turpis sit amet mauris egestas venenatis. Morbi laoreet malesuada dolor, vitae ornare elit. Praesent vitae ultricies sem, id interdum tellus. Integer volutpat, tellus ac hendrerit condimentum, nisl orci vehicula justo, at pulvinar mauris lectus in nisl. Donec scelerisque dolor nec nibh rhoncus, nec vehicula nulla iaculis. Vivamus scelerisque erat vel pharetra porttitor.<br>
<br></p>
</body>
</html>