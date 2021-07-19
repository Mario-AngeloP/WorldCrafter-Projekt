<?php

$db_host = "vweb12.nitrado.net";

$db_dbusername = "ni2284023_1sql3";

$db_name ="ni2284023_1sql3";

$db_passwort ="d3c5afd9";

$db_port = "3306";

$db_socket = "kk";

$link = new mysqli($db_host, $db_dbusername, $db_passwort, $db_name);
$link -> set_charset("utf8");
if ($link->mysqli_connect_errno) {
    die("Verbindung fehlgeschlagen: " . $mysqli->connect_error);
}

?>
