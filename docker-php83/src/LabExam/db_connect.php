<?php
$servername = "db";         
$username   = "root";          
$password   = "rootpassword";  
$database   = "testdb";       

$conn = new mysqli("db", "root", "rootpassword", "testdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?> 