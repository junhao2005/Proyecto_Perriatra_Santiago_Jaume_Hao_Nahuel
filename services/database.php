<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_perriatra";

// Establecer conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexión
if (!$conn) {
    $_SESSION['error'] = "Error de conexión: " . mysqli_connect_error();
    header("Location: ../view/login.php");  
    exit();
}

?>