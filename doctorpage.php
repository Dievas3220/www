<?php
require('DatabaseConnection.php');

$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->connect();
$doctorId = $_GET['doctorId'];
$sql = "SELECT * FROM client WHERE status = 'to do' AND doctor_id = " . $doctorId;
$result = $conn->query($sql);

$conn->close();

echo
"<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Daktaro puslapis</title>
</head>
<body>";

if (empty($doctorId)) {
    echo
    "<form action='doctorpage.php'>
    <input type='radio' name='doctorId' value='1'> Dr. Vytas<br>
    <input type='radio' name='doctorId' value='2'> Dr. Ona<br>
    <input type='radio' name='doctorId' value='3'> Dr. Kazys<br>
    <input type='submit' value='Submit' method='get'>

</form>
";
} else {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo $row["id"] . " " . $row["name"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    echo "<form action='doctorchooseclient.php'>
   Kviesti pacienta ID:<br>
    <input type='text' name='client'><br>
    <input type='submit' value='Submit' method='get'>
</form>
</body>
</html>";
}
