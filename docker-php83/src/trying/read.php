<?php
include "db_connect.php";

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Student Records</h2>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Name</th><th>ENG1</th><th>CCS112</th><th>ITEW3</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['eng1']."</td>";
        echo "<td>".$row['ccs112']."</td>";
        echo "<td>".$row['itew3']."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}
?>
