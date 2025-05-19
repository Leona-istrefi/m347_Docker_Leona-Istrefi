<?php
$mysqli = new mysqli("kn02-db", "root", "geheim", "schule");
 
if ($mysqli->connect_error) {
    die("Verbindung fehlgeschlagen: " . $mysqli->connect_error);
}
echo "Verbindung erfolgreich!";
?>
