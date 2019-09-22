<?php
require('DatabaseConnection.php');

$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->connect();
$ID = $_GET['client'];
$doctorId = $_GET['doctorId'];
echo "Priimtas nr. " . $ID . "<a href='doctorpage.php'> Gryžti į sarašą </a>";
$sql = "UPDATE client SET status = 'Done' WHERE status = 'In progress' AND doctor_id = " . $doctorId;
$result = $conn->query($sql);
$sql = "UPDATE client SET status = 'In progress' WHERE id = " . $ID ." AND doctor_id = " . $doctorId;
$result = $conn->query($sql);
$conn->close();
