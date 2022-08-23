<?php

include "gar-connect.php";


// update
$sql = "DELETE FROM medewerker WHERE medewerker.medewerkerID = '$_POST[medewerkerID]'";

// SQL query maken
$stmt = $conn->prepare($sql);

// query uitvoeren
$result = $stmt->execute();

echo $sql;
echo '<script>alert("acteur is verwijderd")</script>';
echo "<script> location.replace('adminmenu.php'); </script>"

?>