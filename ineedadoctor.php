<?php

echo
"<!DOCTYPE html>
<head>
    <meta charset='UTF-8'>
    <title>Registracija</title>
</head>
<body>
<form action='numbergenerator.php'>
    Jūsų vardas:<br>
    <input type='text' name='firstname'><br>
    <br>
    <input type='radio' name='doctor' value='1'> Dr. Vytas<br>
    <input type='radio' name='doctor' value='2'> Dr. Ona<br>
    <input type='radio' name='doctor' value='3'> Dr. Kazys<br>
    <input type='submit' value='Submit' method='get'>

</form>
</body>
</html>";
