<?php
require('DatabaseConnection.php');

$databaseConnection= new DatabaseConnection();
$conn = $databaseConnection->connect();

$sql = "USE doctor";
$conn->query($sql);
$ID = $_GET['client'];
echo($ID);
$sql = "UPDATE client SET STATUS = 'IN progress' WHERE ID = " . $ID;
$result = $conn->query($sql);

$conn->close();

