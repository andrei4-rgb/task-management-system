<?php
$servername = "db";
$username = "root";
$password = "";
$database = "task_db";

// $conn = new mysqli($localhost, $username, $password, $database);

$conn = new mysqli("db", "root", "rootpassword", "task_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

?>
