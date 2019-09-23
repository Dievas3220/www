<?php
require('DatabaseConnection.php');

$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->connect();
$clientId = htmlspecialchars($_GET['client']);
$doctorId = $_GET['doctorId'];
echo "Priimtas nr. " . $clientId . "<br><a href='doctorpage.php'> Grįžti į sarašą </a>";
$sql = "UPDATE client SET status = 'Done' WHERE status = 'In progress' AND doctor_id = " . $doctorId;
$result = $conn->query($sql);
$sql = "UPDATE client SET status = 'In progress' WHERE id = " . $clientId;
$result = $conn->query($sql);
$conn->close();
