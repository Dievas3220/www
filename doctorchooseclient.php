<?php
require('DatabaseConnection.php');

$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->connect();
$ID = $_GET['client'];
echo($ID);
$doctorid = $_GET['DoctorID'];
$sql = "UPDATE client SET STATUS = 'Done' WHERE Status = 'In progress' AND DoctorID = " . $doctorid;
$result = $conn->query($sql);
$sql = "UPDATE client SET STATUS = 'In progress' WHERE ID = " . $ID ." AND DoctorID = " . $doctorid;
$result = $conn->query($sql);
$conn->close();
