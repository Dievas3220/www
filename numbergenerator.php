<?php
$servername = "localhost";
$username = "root";
$password = "mysql";

$conn = new mysqli($servername, $username, $password);

if  ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$doctor=$_GET["doctor"];
$name=$_GET["firstname"];
$sql = "USE doctor";
$conn->query($sql);
$sql = "INSERT INTO CLIENT (`NAME`, `DoctorID`, `STATUS`) VALUES ('" . $name . "','" . $doctor . "', 'to do')";
if ($conn->query($sql) === True) {
    $last_id = $conn->insert_id;
    echo "Klientas sekmingai uzregistruotas. Jusu numeris yra: " . $last_id;
}  else {
    echo "Ivyko klaida, kreipkites telefonu.";
}

$conn->close();