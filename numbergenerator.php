<?php
require('DatabaseConnection.php');

$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->connect();
$doctor = $_GET["doctor"];
$name = $_GET["firstname"];

$sql = "INSERT INTO client (`name`, `doctor_id`, `status`) VALUES ('" . $name . "','" . $doctor . "', 'to do')";
include 'links.php';
if ($conn->query($sql) === true) {
    $last_id = $conn->insert_id;
    echo "Klientas sėkmingai užregistruotas. Jūsų numeris yra: " . $last_id;
} else {
    echo "Ivyko klaida, kreipkitės telefonu.";
}

$conn->close();
