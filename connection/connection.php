<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pokedex";



$conn = mysqli_connect($servername, $username, $password, $dbname);

// verificacion de la conexion

if (!$conn) {
    echo "<script> alert('Error de conexion')</script>";
    die("Error de conexion: " . mysqli_connect_error());
}

?>
