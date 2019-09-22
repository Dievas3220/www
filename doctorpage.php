<?php
require('DatabaseConnection.php');

$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->connect();

$sql = "SELECT * FROM client WHERE status = 'to do'";
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
