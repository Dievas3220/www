<?php
require('DatabaseConnection.php');

$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->connect();

$sql = "SELECT * FROM client WHERE status = 'TO DO'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"] . "- Vardas: " . $row["name"] . "
        <br>";
    }
} else {
    echo "0 results";
}

$conn->close();
