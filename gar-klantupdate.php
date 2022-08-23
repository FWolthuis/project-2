<!DOCTYPE html>
<html>
    <body>
        <h1>Klant Updaten</h1>
    </body>
</html>


<?php

// Auteur: F. Wolthuis

include "gar-connect.php";

// fromulier tbv update

echo '<form method="post" action="gar-klantupdate-db.php">';
echo "<input type='hidden' name='klantid' value='$_POST[klantid]'>";

echo "<lable for='klantnaam'>klantnaam</lable><br>";
echo "<input type='text' name='klantnaam' required value='$_POST[klantnaam]'> *</br></br>";

echo "<lable for='klantemail'>klantemail</lable><br>";
echo "<input type='text' name='klantemail' required value='$_POST[klantemail]'> *</br></br>";

echo "<lable for='klantadres'>klantadres</lable><br>";
echo "<input type='text' name='klantadres' required value='$_POST[klantadres]'> *</br></br>";

echo "<lable for='klantpostcode'>klantpostcode</lable><br>";
echo "<input type='text' name='klantpostcode' required value='$_POST[klantpostcode]'> *</br></br>";

echo "<lable for='klantplaats'>klantplaats</lable><br>";
echo "<input type='text' name='klantplaats' required value='$_POST[klantplaats]'> *</br></br>";

echo "<lable for='merk'>merk</lable><br>";
echo "<input type='text' name='merk' required value='$_POST[merk]'> *</br></br>";

echo "<lable for='model'>model</lable><br>";
echo "<input type='text' name='model' required value='$_POST[model]'> *</br></br>";

echo "<lable for='kenteken'>kenteken</lable><br>";
echo "<input type='text' name='kenteken' required value='$_POST[kenteken]'> *</br></br>";

echo "<lable for='kmstand'>kmstand</lable><br>";
echo "<input type='text' name='kmstand' required value='$_POST[kmstand]'> *</br></br>";

echo "<input type='submit' name='update' value='Wijzigen'>";
echo '</form>';


?>