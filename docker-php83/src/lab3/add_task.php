<?php
include "db_connect.php";


if (isset($_POST['submit'])) {
    $task_name = $_POST['task_name'];
    $task_date = $_POST['task_date'];

    $sql = "INSERT INTO tasks (task_name, task_date) VALUES ('$task_name', '$task_date')";
    if ($conn->query($sql) === TRUE) {
        echo "Task added successfully.<br>";
        echo "<a href='view_task.php'>View Tasks</a>";
    } else {
        echo "Error: " . $conn->error;
    } 
}
?>

<html>
<head>
<title>Add Task</title>
</head>
<body>
<h2>Add Task</h2>
<form method="post" action="">
    Task Name: <input type="text" name="task_name" required><br><br>
    Task Date: <input type="date" name="task_date" required><br><br>
    <input type="submit" name="submit" value="Save Task">
</form>
<br>
<a href="view_task.php">View Tasks</a>
</body>
</html>
