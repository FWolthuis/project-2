<!DOCTYPE html>
<html>
    <body>
        <h1>Medewerker Updaten</h1>
    </body>
</html>


<?php

// Auteur: F. Wolthuis

include "gar-connect.php";

// fromulier tbv update

echo '<form method="post" action="gar-medewerkerupdate-db.php">';
echo "<input type='hidden' name='medewerkerID' value='$_POST[medewerkerID]'>";

echo "<lable for='medewerkernaam'>medewerkernaam</lable><br>";
echo "<input type='text' name='medewerkernaam' required value='$_POST[medewerkernaam]'> *</br></br>";

echo "<lable for='functie'>functie</lable><br>";
echo "<input type='text' name='functie' required value='$_POST[functie]'> *</br></br>";

echo "<lable for='email'>email</lable><br>";
echo "<input type='text' name='email' required value='$_POST[email]'> *</br></br>";

echo "<input type='submit' name='update' value='Wijzigen'>";
echo '</form>';


?>