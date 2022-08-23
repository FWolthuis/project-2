<?php

include "gar-connect.php";

if(isset($_POST['email']) && isset($_POST['wachtwoord'])){

    $input_email = $_POST['email'];
    $input_wachtwoord = $_POST['wachtwoord'];
    

    $input_wachtwoord = sha1 ($_POST['wachtwoord']);

    $sql = "SELECT * FROM medewerker WHERE email = '$input_email' AND wachtwoord = '$input_wachtwoord'";
    $result = $conn->query($sql);
   

    if($result->rowCount() > 0){
        //while($row = $result->fetch_assoc()){
        foreach($result as $row){

            $functie = $row['functie'];
            $email = $row['email'];
            $wachtwoord = $row['wachtwoord'];

            if($functie == 1)
            {
                if($wachtwoord == $input_wachtwoord && $email == $input_email)
                {
                    header('Location: adminmenu.php');
                }
            }

            if($functie == 2)
            {
                if($wachtwoord == $input_wachtwoord && $email == $input_email)
                {
                    header('Location: medewerkermenu.php');
                }
            }
        }
    }
}

?>
<!DOCTYPE html>
<meta charset="utf-8">
<html lang="nl">
    <head>
        <title>Garage Bedrijf Ertan</title>
        <link rel="stylesheet" href="opmaakErtan.css">
        <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6DgsgVjOck8xYqnt__s4wCx8lGQnR6yunNQ&usqp=CAU">
    </head>

    <body>
        <div class="inhoud3">
            <h3>Log hier in</h3>
            <form method="post" action="ErtanLeden.php" id="inlog">
                <label for="werknemer">Email:</label><br>
                <input type="text" name="email" id="inlog"><br>
                <br>
                <label for="wachtwoord">Wachtwoord:</label><br>
                <input type="password" name="wachtwoord" id="inlog"><br>
                <br>
                <input type="submit" value="Log in" id="inlog">
            </form>
            <a href="registreer.php">Registreer hier</a>
        </div>
    </body>
</html>

