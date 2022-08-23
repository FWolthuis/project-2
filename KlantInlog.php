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
            <li class="middleitem"><a href="KlantInlog.php">Afspraak Maken</a></li> <!-- php file van maken -->
            <li class="middleitem"><a href="ErtanLeden.php">Ertan Leden</a></li>    <!-- php file van maken -->
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

    <div class="inhoud2" id="inhoud2">
        <h2>Maak hier uw afspraak</h2>

        <form id="klantgegevens" method="post" action="klantverzend.php">

            <label for="klantnaam">Voornaam en Achternaam:</label><br>
            <input type="text" id="klantgegevens" name="klantnaam"><br>

            <label for="klantemail">Email:</label><br>
            <input type="email" id="klantgegevens" name="klantemail"><br>

            <label for="klantplaats">Plaats:</label><br>
            <input type="text" id="klantgegevens" name="klantplaats"><br>

            <label for="klantadres">Adres:</label><br>
            <input type="text" id="klantgegevens" name="klantadres"><br>

            <label for="klantpostcode">Postcode:</label><br>
            <input type="text" id="klantgegevens" name="klantpostcode" placeholder="1234AA"><br>

            <br>
            <br>

            <label for="merk">Merk:</label><br>
            <select name="merk" id="klantgegevens">
                <option value="Abarth">Abarth</option>
                <option value="Audi">Audi</option>
                <option value="BMW">BMW</option>
                <option value="Chevrolet">Chevrolet</option>
                <option value="Citroën">Citroën</option>
                <option value="Dacia">Dacia</option>
                <option value="Dodge">Dodge</option>
                <option value="Ds">DS</option>
                <option value="Fiat">Fiat</option>
                <option value="Ford">Ford</option>
                <option value="Honda">Honda</option>
                <option value="Hyundai">Hyundai</option>
                <option value="Infiniti">Infiniti</option>
                <option value="Jeep">Jeep</option>
                <option value="Kia">Kia</option>
                <option value="Lancia">Lancia</option>
                <option value="Landrover">Land Rover</option>
                <option value="Mazda">Mazda</option>
                <option value="Mercedesbenz">Mercedes-Benz</option>
                <option value="MG">MG</option>
                <option value="Mini">Mini</option>
                <option value="Mitsubishi">Mitsubishi</option>
                <option value="Nissan">Nissan</option>
                <option value="Opel">Opel</option>
                <option value="Peugeot">Peugeot</option>
                <option value="Renault">Renault</option>
                <option value="Seat">Seat</option>
                <option value="Skoda">Skoda</option>
                <option value="Subaru">Subaru</option>
                <option value="Suzuki">Suzuki</option>
                <option value="Toyota">Toyota</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Volvo">Volvo</option>
            </select>

            <br>
            <br>

            <label for="model">Model:</label><br>
            <input type="text" id="klantgegevens" name="model"><br>

            <label for="kmstand">Kilometer stand</label><br>
            <input type="text" id="klantgegevens" name="kmstand"><br>

            <label for="kenteken">Kenteken:</label><br>
            <input type="text" id="klantgegevens" name="kenteken" placeholder="XX-XX-XX"><br>

            <input type="submit" value="Verzenden" id="klantgegevens">
        </form>
    </div>
</body>
</html>