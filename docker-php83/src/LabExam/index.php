<?php
include "db_connect.php";

// this is where i can delete the book
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM books WHERE id=$id");
}

// to search the book that had saved
$search = "";
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM books 
            WHERE title LIKE '%$search%' 
            OR author LIKE '%$search%' 
            OR isbn LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM books";
}

$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Library Catalog</title>
</head>
<body>
    <h2>Library Catalog</h2>

    <form method="get">
        <input type="text" name="search" placeholder="Search..." value="<?php echo $search; ?>">
        <button type="submit">Find</button>
    </form>
    <br>

    <a href="add.php">Add New Book</a>
    <br><br>

    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th>ISBN</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['title']."</td>
                        <td>".$row['author']."</td>
                        <td>".$row['pub_year']."</td>
                        <td>".$row['isbn']."</td>
                        <td><a href='index.php?delete=".$row['id']."' onclick=\"return confirm('You want to delete this book?')\">Delete</a></td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No books inserted.</td></tr>";
        } 
        ?>
    </table>
</body>
</html>

 