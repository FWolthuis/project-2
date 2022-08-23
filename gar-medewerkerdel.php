<?php

// Auteur: F. Wolthuis

include "gar-connect.php";

if(isset($_POST['medewerkerID']))
{
$id = $_POST['medewerkerID'];
echo "$id";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM medewerker WHERE medewerkerID='$id'";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
    // terugsturen naar de hoofdpagina
    header('Location: adminmenu.php');
    }
catch(PDOException $e)
    {
    //echo $sql . "<br>" . $e->getMessage();
    }
}
$conn = null;

?>