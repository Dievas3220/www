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
    <title>Svieslente</title>
</head>
<body>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["ID"] . "<br>";
    }
} else {
    echo "0 results";
}
echo
"</body>
</html>";
