<?php
require('DatabaseConnection.php');

$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->connect();
if (isset( $_POST ["submit"])){


if (isset($_POST["clientName"]) && isset($_POST["doctorId"]))
{
    $doctor = $_POST["doctorId"];
$name =     $_POST["clientName"];
}





$sql = "INSERT INTO client (`name`, `doctor_id`, `status`) VALUES ('" . $name . "','" . $doctor . "', 'to do')";
include 'links.php';
if ($conn->query($sql) === true) {
    $last_id = $conn->insert_id;
    echo "Klientas sėkmingai užregistruotas. Jūsų numeris yra: " . $last_id;
} else {
    echo "Ivyko klaida, kreipkitės telefonu.";
}

$conn->close();
}
else {
    echo "Ivyko klaida, kreipkitės telefonu.";
    }