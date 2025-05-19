<?php
include '../services/database.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = trim($_POST['nombre'] ?? '');
    $ape = trim($_POST['apellidos'] ?? '');
    $pass = $_POST['password'] ?? '';
    $confipass = $_POST['confirm-password'] ?? '';
    $gmail = trim($_POST['correo'] ?? '');

    // Validaciones
    if (strlen($user) < 3) {
        header("Location: ../view/register.html");
        exit();
    }

    if (strlen($ape) < 3) {
        header("Location: ../view/register.html");
        exit();
    }

    if (strlen($pass) < 8 ||
        !preg_match("/[A-Z]/", $pass) ||
        !preg_match("/[a-z]/", $pass) ||
        !preg_match("/[0-9]/", $pass)) {
        header("Location: ../view/register.html");
        exit();
    }

    if ($pass !== $confipass) {
        header("Location: ../view/register.html");
        exit();
    }

    if (!filter_var($gmail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../view/register.html");
        exit();
    }

    // Comprobar si el usuario ya existe usando consulta preparada
    $stmt = mysqli_prepare($conn, "SELECT id_usuario FROM tbl_usuarios WHERE nombre_usuario = ?");
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        // Usuario ya existe
        mysqli_stmt_close($stmt);
        header("Location: ../view/register.html");
        exit();
    }
    mysqli_stmt_close($stmt);

    // Insertar usuario
    $passwordHash = password_hash($pass, PASSWORD_DEFAULT);
    $stmt = mysqli_prepare($conn, "INSERT INTO tbl_usuarios (nombre_usuario, contra_usuario, email_usuario) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sss", $user, $passwordHash, $gmail);

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("Location: ../index.php");
        exit();
    } else {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("Location: ../view/register.html");
        exit();
    }
}
?>
