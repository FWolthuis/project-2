<!DOCTYPE html>
<meta charset="UTF-8">
<html lang="nl">
    <head>
        <title>Garage Bedrijf Ertan</title>
        <link rel="stylesheet" href="opmaakErtan.css">
        <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6DgsgVjOck8xYqnt__s4wCx8lGQnR6yunNQ&usqp=CAU">
    </head>
    <body>
        <div class="inhoud3">
            <?php

            include "gar-connect.php";
            
            $medewerkerID = NULL;
            $email = $_POST["email"];
            $wachtwoord = sha1 ($_POST["wachtwoord"]);
            $medewerkernaam = $_POST["medewerkernaam"];
            $functie = $_POST["functie"];

            $sql = $conn->prepare("INSERT INTO medewerker (email, wachtwoord, medewerkernaam, functie)
            VALUES (:email, :wachtwoord, :medewerkernaam, :functie)");

            $sql->bindParam(':email', $email);
            $sql->bindParam(':wachtwoord', $wachtwoord);
            $sql->bindParam(':medewerkernaam', $medewerkernaam);
            $sql->bindParam(':functie', $functie);

            $sql-> execute();

            echo "<p>U heeft een account toegevoegd</p><br>";
            echo "<p><a href='Ertanleden.php'>Klik hier om te inloggen</a></p>";
            ?>
        </div>      
    </body>
</html>