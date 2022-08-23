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
            <form action="registreerverzend.php" method="post" id="inlog">
                <label for="username">Zet hier uw email:</label><br>
                <input type="email" name="email" id="login"><br>
                <br>
                <label for="wachtwoord">Maak hier uw wachtwoord:</label><br>
                <input type="text" name="wachtwoord" id="login"><br>
                <br>
                <label for="medewerkernaam">Vul hier uw voor/achternaam in:</label><br>
                <input type="text" name="medewerkernaam" id="login"><br>
                <br>
                <label for="functie">Noem uw functie</label>
                <select name="functie" id="login"><br>
                    <option value="1">Admin</option>
                    <option value="2">Medewerker</option>
                </select><br>
                <input type="submit" value="Aanmaken" id="login">
            </form>
        </div>      
    </body>
</html>

