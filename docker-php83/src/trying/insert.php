<?php
include "db_connect.php";

$sql = "INSERT INTO students (name, eng1, ccs112, itew3) 
        VALUES ('Andrei', 85, 90, 88)";

if ($conn->query($sql) === TRUE) {
    echo "New student record added.<br>";
    echo "<a href='read.php'>View Records</a>";
} else {
    echo "Error: " . $conn->error;
}
?>
