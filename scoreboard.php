<?php

$servername = "localhost";
$username = "root";
$password = "mysql";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "USE doctor";
$conn->query($sql);
$sql = "SELECT * FROM CLIENT WHERE STATUS = 'TO DO'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["ID"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
