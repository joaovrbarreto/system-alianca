<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'am_request';


//Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>