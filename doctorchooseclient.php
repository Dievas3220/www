<?php
require('DatabaseConnection.php');

$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->connect();
$clientId = $_GET['client'];
$doctorId = $_GET['doctorId'];
echo "Priimtas nr. " . $clientId . "<a href='doctorpage.php'> Gryžti į sarašą </a>";
$sql = "UPDATE client SET status = 'Done' WHERE status = 'In progress' AND doctor_id = " . $doctorId;
$result = $conn->query($sql);
$sql = "UPDATE client SET status = 'In progress' WHERE id = " . $clientId ." AND doctor_id = " . $doctorId;
$result = $conn->query($sql);
$conn->close();
