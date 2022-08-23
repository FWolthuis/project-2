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
$sql = "UPDATE klant SET klantnaam = '$_POST[klantnaam]', klantemail = '$_POST[klantemail]', klantadres = '$_POST[klantadres]', klantpostcode = '$_POST[klantpostcode]', klantplaats = '$_POST[klantplaats]', merk = '$_POST[merk]', model = '$_POST[model]', kenteken = '$_POST[kenteken]', kmstand = '$_POST[kmstand]' WHERE klant.klantid = '$_POST[klantid]';";

// SQL query maken
$stmt = $conn->prepare($sql);

// query uitvoeren
$result = $stmt->execute();

header("location: medewerkermenu.php");


?>