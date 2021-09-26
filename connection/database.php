
<?php
$servername = "192.168.1.104";
$username = "cristina";
$password = "ticavanzado";
$bd = "bolsa_empleo";

$mysqli = new mysqli($servername, $username, $password, $bd);

if ($mysqli->connect_errno) {
    die('Fatal error noob');
}
