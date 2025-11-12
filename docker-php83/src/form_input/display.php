<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 5px; }
    </style>
</head>
<body>
<h2>Student Records</h2>

<?php
if (!empty($_SESSION['students'])) {
    echo "<table>";
    echo "<tr>
            <th>Name</th>
            <th>ENG1</th>
            <th>CCS112</th>
            <th>ITEW3</th>
            <th>Average</th>
            <th>Status</th>
          </tr>";

    foreach ($_SESSION['students'] as $student) {
        $average = ($student['ENG1'] + $student['CCS112'] + $student['ITEW3']) / 3;
        $status = ($average >= 60) ? "Passed" : "Failed";

        echo "<tr>";
        echo "<td>" . $student['name'] . "</td>";
        echo "<td>" . $student['ENG1'] . "</td>";
        echo "<td>" . $student['CCS112'] . "</td>";
        echo "<td>" . $student['ITEW3'] . "</td>";
        echo "<td>" . number_format($average, 1) . "</td>";
        echo "<td>" . $status . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>

<br>
<a href="index.php">Return to Input</a>
</body>
</html>
