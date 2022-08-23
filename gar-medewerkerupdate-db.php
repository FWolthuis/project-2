<!DOCTYPE html>
<html>
    <body>
        <h1>Update</h1>
    </body>
</html>


<?php

// Auteur: F. Wolthuis

include "gar-connect.php";


// update
$sql = "UPDATE medewerker SET medewerkernaam = '$_POST[medewerkernaam]', functie = '$_POST[functie]', email = '$_POST[email]' WHERE medewerker.medewerkerID = '$_POST[medewerkerID]';";

// SQL query maken
$stmt = $conn->prepare($sql);

// query uitvoeren
$result = $stmt->execute();

header("location: adminmenu.php");


?>