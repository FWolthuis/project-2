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

            $klantid = NULL;
            $klantnaam = $_POST["klantnaam"];
            $klantemail = $_POST["klantemail"];
            $klantplaats = $_POST["klantplaats"];
            $klantadres = $_POST["klantadres"];
            $klantpostcode = $_POST["klantpostcode"];
            $merk = $_POST["merk"];
            $model = $_POST["model"];
            $kmstand = $_POST["kmstand"];
            $kenteken = $_POST["kenteken"];

            

            $sql = $conn->prepare("INSERT INTO klant (klantnaam, klantemail, klantplaats, klantadres, klantpostcode, merk, model, kenteken, kmstand)
            VALUES (:klantnaam, :klantemail, :klantplaats, :klantadres, :klantpostcode, :merk, :model, :kenteken, :kmstand)");

            //$sql->bindParam(':klantid', $klantid);
            $sql->bindParam(':klantnaam', $klantnaam);
            $sql->bindParam(':klantemail', $klantemail);
            $sql->bindParam(':klantplaats', $klantplaats);
            $sql->bindParam(':klantadres', $klantadres);
            $sql->bindParam(':klantpostcode', $klantpostcode);
            $sql->bindParam(':merk', $merk);
            $sql->bindParam(':model', $model);
            $sql->bindParam(':kenteken', $kenteken);
            $sql->bindParam(':kmstand', $kmstand);

            $sql-> execute();

            echo "<p>afspraak gemaakt!</p><br>";
            echo "<p><a href='index.php'>klik hier om terug te gaan naar het home menu </a></p>";

            ?>
        </div>      
    </body>
</html>