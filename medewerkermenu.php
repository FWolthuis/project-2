<?php

// Auteur: E. Sagir
// Functie: klanten inlogscherm
// connect database garage
include "gar-connect.php";

$stmt = $conn->prepare("SELECT * FROM klant");

$result = $stmt->execute();

$rows = $stmt->fetchALL();

?>

<!DOCTYPE html>
<meta charset="utf-8">
<html lang="nl">
    <head>
        <title>Garage Bedrijf Ertan</title>
        <link rel="stylesheet" href="opmaakertanmenus.css">
        <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6DgsgVjOck8xYqnt__s4wCx8lGQnR6yunNQ&usqp=CAU">
    </head>

    <body>
        <h1>Klanten Overzicht</h1>
        <p><a href='ErtanLeden.php'>klik hier om terug te gaan naar het inlog scherm</a></p>
        <table border=1px>
            <tr>
                <th>klantid</th>
                <th>klantnaam</th>
                <th>klantemail</th>
                <th>klantadres</th>
                <th>klantpostcode</th>
                <th>klantplaats</th>
                <th>merk</th>
                <th>model</th>
                <th>kenteken</th>
                <th>kmstand</th>
            </tr> 
    </body>
</html>


<?php
foreach($rows as $row) {
    echo "<tr>";
    echo "<td>" . $row['klantid'] . "</td>";
    echo "<td>" . $row['klantnaam'] . "</td>";
    echo "<td>" . $row['klantemail'] . "</td>";
    echo "<td>" . $row['klantadres'] . "</td>";
    echo "<td>" . $row['klantpostcode'] . "</td>";
    echo "<td>" . $row['klantplaats'] . "</td>";
    echo "<td>" . $row['merk'] . "</td>";
    echo "<td>" . $row['model'] . "</td>";
    echo "<td>" . $row['kenteken'] . "</td>";
    echo "<td>" . $row['kmstand'] . "</td>";
    

    echo "<td>";
        // update
        echo "<form method='post' id='medewerkermenu' action='gar-klantupdate.php'>";
        echo "<input type='hidden' name='klantid' value='$row[klantid]' />";
        echo "<input type='hidden' name='klantnaam' value='$row[klantnaam]' />";  
        echo "<input type='hidden' name='klantemail' value='$row[klantemail]' />";  
        echo "<input type='hidden' name='klantadres' value='$row[klantadres]' />";  
        echo "<input type='hidden' name='klantpostcode' value='$row[klantpostcode]' />";  
        echo "<input type='hidden' name='klantplaats' value='$row[klantplaats]' />";  
        echo "<input type='hidden' name='merk' value='$row[merk]' />";  
        echo "<input type='hidden' name='model' value='$row[model]' />";  
        echo "<input type='hidden' name='kenteken' value='$row[kenteken]' />";  
        echo "<input type='hidden' name='kmstand' value='$row[kmstand]' />";  
        echo "<input type='submit' name='edit' value='Bewerken'/></form>";
    echo "</td>";      
        
    echo "<td>";    
        // delete
        echo "<form method='post' id='form2' action='gar-klantdel.php'>";
        echo "<input type='hidden' name='klantid' value='$row[klantid]' />";    
        echo "<input type='submit' name='verwijderen' value='Verwijderen'/></form>";
    echo "</td>";
    
    echo "</tr>";
}

?>