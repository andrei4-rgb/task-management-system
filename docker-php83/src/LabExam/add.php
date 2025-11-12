<?php 
include "db_connect.php"; 
?>


<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $pub_year = $_POST['pub_year'];
    $isbn = $_POST['isbn'];

    $sql = "INSERT INTO books (title, author, pub_year, isbn) 
            VALUES ('$title', '$author', '$pub_year', '$isbn')";

    if ($conn->query($sql) === TRUE) {
        echo "New Book Added!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
</head>
<body>
    <h2>Add New Book</h2>
    <form method="post">
        Title: <input type="text" name="title"><br>
        Author: <input type="text" name="author"><br>
        Year: <input type="number" name="pub_year"><br>
        ISBN: <input type="text" name="isbn"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <a href="index.php">Back to Catalog</a>
</body>
</html>
