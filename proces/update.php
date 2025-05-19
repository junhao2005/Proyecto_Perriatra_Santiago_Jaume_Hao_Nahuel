<?php
include "../services/database.php";
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Verificar si se enviaron todos los datos requeridos
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset(
    $_POST['chip'],
    $_POST['nombre'],
    $_POST['sexo'],
    $_POST['fecha_nacimiento'],
    $_POST['peso'],
    $_POST['vacunado'],
    $_POST['id_especie'],
    $_POST['id_propietario']
)) {
    $chip = $_POST['chip'];
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $peso = $_POST['peso'];
    $vacunado = $_POST['vacunado'];
    $id_especie = $_POST['id_especie'];
    $id_propietario = $_POST['id_propietario'];

    $sql = "UPDATE mascotas SET 
        nombre = ?, 
        sexo = ?, 
        fecha_nacimiento = ?, 
        peso = ?, 
        vacunado = ?, 
        id_especie = ?, 
        id_propietario = ? 
        WHERE chip = ?";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssdiiis", $nombre, $sexo, $fecha_nacimiento, $peso, $vacunado, $id_especie, $id_propietario, $chip);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: index.php"); // Redirige a la página principal
        exit();
    } else {
        echo "<p>Error al actualizar la mascota: " . mysqli_error($conn) . "</p>";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "<p>Datos incompletos para actualizar la mascota.</p>";
}

mysqli_close($conn);
?>
