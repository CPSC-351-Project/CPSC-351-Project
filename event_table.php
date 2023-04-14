<?php
    session_start();
    include "connection.php";
    include "functions.php";
    $user_data = check_login($conn);
    $id = $user_data['user_id'];

    // Select all events for the logged-in user from the database
    $sql = "SELECT * FROM events WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
?>

<html>
<head>
    <title>My Events</title>
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
                        <li><a href="event_table.php">Advice Forum</a></li>
                        <li><a href="event.php">Events Page</a></li>
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
        <h1>My Events</h1>
    </header>
    <button onclick="window.location.href='event.php';">Add Event</button>
    <table>
        <tr>
            <th>Event Date</th>
            <th>Event Name</th>
            <th>Event Time</th>
            <th>Event Description</th>
            <th>Event Location</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['eventDate']; ?></td>
            <td><?php echo $row['eventName']; ?></td>
            <td><?php echo $row['eventTime']; ?></td>
            <td><?php echo $row['eventDescription']; ?></td>
            <td><?php echo $row['eventLocation']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
