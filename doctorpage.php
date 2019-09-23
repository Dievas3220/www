<?php
require('DatabaseConnection.php');
require('Doctors.php');

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
include 'links.php';
if (empty($doctorId)) {
    $doctors = new Doctors();
    echo "<form action='doctorpage.php'>";
    foreach ($doctors->getDoctors() as $doctorId =>$doctor) {
        echo "<input type='radio' name='doctorId' value=$doctorId> $doctor <br>";
    }
    echo "<input type='submit' value='Submit' method='get'>
   </form>";
} else {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo $row["id"] . " " . htmlspecialchars($row["name"]) . "<br>";
        }
    } else {
        echo "0 results";
    }
    echo "<form action='doctorchooseclient.php'>
    Kviesti pacientą nr:<br>
    <input type='text' name='client'><br>
    <input type='hidden' name='doctorId' value=" . $doctorId . "><br>
    <input type='submit' value='Submit' method='get'>
</form>
</body>
</html>";
}

