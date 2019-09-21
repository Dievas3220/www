<?php
$servername = "localhost";
$username = "root";
$password = "mysql";

$conn = new mysqli($servername, $username, $password);

if  ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name=$_POST["firstname"];
$sql = "USE doctor";
$conn->query($sql);
$sql = "INSERT INTO CLIENT (NAME, DoctorID, STATUS) VALUES ('" . $name . "', 1, 'to do')";
if ($conn->query($sql) ===True) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();