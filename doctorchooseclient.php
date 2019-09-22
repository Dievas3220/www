<?php
require('DatabaseConnection.php');

$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->connect();
$ID = $_GET['client'];
echo($ID);
$doctorid = $_GET['DoctorID'];
$sql = "UPDATE client SET status = 'Done' WHERE status = 'In progress' AND doctor_id = " . $doctorid;
$result = $conn->query($sql);
$sql = "UPDATE client SET status = 'In progress' WHERE id = " . $ID ." AND doctor_id = " . $doctorid;
$result = $conn->query($sql);
$conn->close();
