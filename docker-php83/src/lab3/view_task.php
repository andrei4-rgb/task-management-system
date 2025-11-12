<?php
include "db_connect.php";

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);
?>

<html>
<head>
<title> View Tasks </title>
</head>
<body>
<h2> Task List </h2>

<?php

//calling out the result; if correct - else if no task was found
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Task ID</th> <th>Task Name</th> <th>Task Date</th> <th>Status</th> </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['task_name']."</td>";
        echo "<td>".$row['task_date']."</td>";
        echo "<td>".$row['status']."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No tasks found.";
}
?>
<br>
<a href="add_task.php">Return</a>
</body>
</html>

