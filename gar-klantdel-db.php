<?php

include "gar-connect.php";


// update
$sql = "DELETE FROM klant WHERE klant.klantid = '$_POST[klantid]'";

// SQL query maken
$stmt = $conn->prepare($sql);

// query uitvoeren
$result = $stmt->execute();

echo $sql;
echo '<script>alert("acteur is verwijderd")</script>';
echo "<script> location.replace('medewerkermenu.php'); </script>"

?>