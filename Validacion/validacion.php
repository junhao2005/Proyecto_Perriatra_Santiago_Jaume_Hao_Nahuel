<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener y limpiar datos del formulario
    $email = trim($_POST["email"] ?? '');
    $password = trim($_POST["password"] ?? '');

    $errores = [];

    // Validación: Email o nombre de usuario (mínimo 3 caracteres)
    if (strlen($email) < 3) {
        $errores[] = "El email o nombre de usuario debe tener al menos 3 caracteres.";
    }

    // Validación: Formato de email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El formato del email no es válido.";
    }

    // Validación: Contraseña
    if (strlen($password) < 8) {
        $errores[] = "La contraseña debe tener al menos 8 caracteres.";
    }

    if (!preg_match('/[A-Z]/', $password)) {
        $errores[] = "La contraseña debe contener al menos una letra mayúscula.";
    }

    if (!preg_match('/[0-9]/', $password)) {
        $errores[] = "La contraseña debe contener al menos un número.";
    }

    if (empty($errores)) {
        // Si todo es válido, hash de la contraseña
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        // Aquí podrías comparar el hash con el almacenado en tu base de datos
        echo "<h2>✅ Validación exitosa</h2>";
        echo "<p>Email: $email</p>";
        echo "<p>Hash de la contraseña: $passwordHash</p>";
    } else {
        // Mostrar errores
        echo "<h2>❌ Errores de validación:</h2><ul>";
        foreach ($errores as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul><a href='javascript:history.back()'>Volver</a>";
    }
} else {
    echo "Acceso no permitido.";
}
?>
