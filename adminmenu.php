<?php

// Auteur: E. Sagir
// Functie: admin inlogscherm
// connect database garage
include "gar-connect.php";

$stmt = $conn->prepare("SELECT * FROM medewerker");

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
    <body id="admin">
        <h1>Medewerker Overzicht</h1>
        <p><a href='ErtanLeden.php'>klik hier om terug te gaan naar het inlog scherm</a></p>
        <table border=1px>
            <tr>
                <th>medewerkerID</th>
                <th>medewerkernaam</th>
                <th>functie</th>
                <th>email</th>
            </tr>
    </body>
</html>


<?php
foreach($rows as $row) {
    echo "<tr>";
    echo "<td>" . $row['medewerkerID'] . "</td>";
    echo "<td>" . $row['medewerkernaam'] . "</td>";
    echo "<td>" . $row['functie'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";

    echo "<td>";
        // update
        echo "<form method='post' id='adminmenu' action='gar-medewerkerupdate.php'>";
        echo "<input type='hidden' name='medewerkerID' value='$row[medewerkerID]' />";
        echo "<input type='hidden' name='medewerkernaam' value='$row[medewerkernaam]' />"; 
        echo "<input type='hidden' name='functie' value='$row[functie]' />"; 
        echo "<input type='hidden' name='email' value='$row[email]' />";   
        echo "<input type='submit' name='edit' value='Bewerken'/></form>";
    echo "</td>";      
        
    echo "<td>";    
        // delete
        echo "<form method='post' id='form2' action='gar-medewerkerdel.php'>";
        echo "<input type='hidden' name='medewerkerID' value='$row[medewerkerID]' />";    
        echo "<input type='submit' name='verwijderen' value='Verwijderen'/></form>";
    echo "</td>";
    
    echo "</tr>";
}

?>