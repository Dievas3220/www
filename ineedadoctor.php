<?php
require('Doctors.php');

echo
"<!DOCTYPE html>
<head>
    <meta charset='UTF-8'>
    <title>Registracija</title>
</head>
<body>";
include 'links.php';
$doctors = new Doctors();
echo"
<form action='numbergenerator.php'>
Jūsų vardas:<br>
<input type='text' name='clientName'><br>
<br>";
foreach ($doctors->getDoctors() as $doctorId =>$doctor) {
    echo "<input type='radio' name='doctorId' value=$doctorId> $doctor <br>";
}
echo "
<input type='submit' value='Submit' method='get'>
</form>
</body>
</html>";
