<?php
    include "connection.php";
    $result = $conn->query("SELECT * FROM messaging ORDER BY id ASC");
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p>" . $row["dtsent"] . " - " . $row["message"] . "</p>";
        }
    } else {
        echo "No messages.";
    }
    $conn->close();
?>
