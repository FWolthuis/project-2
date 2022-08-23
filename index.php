<!DOCTYPE html>
<meta charset="utf-8">
<html lang="nl">

<head> 
<title>Garage Bedrijf Ertan</title>
<link rel="stylesheet" href="opmaakErtan.css">
<link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6DgsgVjOck8xYqnt__s4wCx8lGQnR6yunNQ&usqp=CAU">
</head>

<body>

    <a class="topbar">
        <img class="logo" src="logo garage.png" alt="logo"> <!-- logo kan nog verandert worden-->
    </a>

    <h1>Auto Garage Ertan</h1>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li class="middleitem"><a href="KlantInlog.php">Afspraak Maken</a></li>
            <li class="middleitem"><a href="ErtanLeden.php">Ertan Leden</a></li>
            <li class="lastitem"><a href="Info.php">Info</a></li>
        </ul>
    </nav>

    <div class="inhoud">
        <table>
            <tr>
                <th>Reparaties</th>
                <th>Auto kopen</th>
            </tr>
            <tr>
                <td><img src="https://www.bovag.nl/BovagWebsite/media/BovagMediaFiles/Headers/Onderhoud.jpg?ext=.jpg" alt="reparatie"></td>
                <td><img src="https://www.martijne-interieur.nl/Images/showroom_novus_auto/foto1.jpg" alt="kopen"></td>
            </tr>
        </table>
    </div>
</body>
</html>


<?php

include "gar-connect.php";

?>