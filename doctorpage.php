<?php
require('DatabaseConnection.php');

$databaseConnection= new DatabaseConnection();
$conn = $databaseConnection->connect();

$sql = "USE doctor";
$conn->query($sql);
$sql = "SELECT * FROM CLIENT WHERE STATUS = 'TO DO'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. "- Name: " . $row["name"]. "
        <br>";
    }
} else {
    echo "0 results";
}

$conn->close();