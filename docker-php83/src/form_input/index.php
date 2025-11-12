<?php 

?>
<!DOCTYPE html>
<html>
<body>
<h2>Student Grades Encoding</h2>

<form method="POST" action="save.php">
    <label>Student Name:</label>
    <input type="text" name="name" required><br><br>

    <label>ENG1 grade:</label>
    <input type="number" name="eng1" required><br><br>

    <label>CCS112 grade:</label>
    <input type="number" name="ccs112" required><br><br>

    <label>ITEW3 grade:</label>
    <input type="number" name="itew3" required><br><br>

    <button type="submit" name="save">Save Record</button>
</form>

<br>
<form method="POST" action="display.php">
    <button type="submit" name="display">Display Records</button>
</form>
</body>
</html>
