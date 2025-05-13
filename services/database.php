
<?php

// Lo que permite es realizar que requiera las variables que generamos en el archivo de variables BBDD
require_once "./database_config.php";


// Se realiza la conexion con la base de datos
$conn = mysqli_connect($host, $username, $password, $dbname);


// Verifica la conexion y si no es posible o algun campo es incorrecto te salta el error
if (!$conn) {
    echo "<script> alert('Error de connexion')</script>";
    die("Error de connexión" . mysqli_connect_error());
}