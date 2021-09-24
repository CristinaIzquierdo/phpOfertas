
<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$bd = "ofertasPHP";

$mysqli = new mysqli($servername, $username, $password, $bd);

if ($mysqli->connect_errno) {
    die('error');
}
