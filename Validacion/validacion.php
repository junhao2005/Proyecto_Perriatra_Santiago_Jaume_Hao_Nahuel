
<?php
    // Incluye la conexión a la base de datos
    include '../services/database.php';

    // Verifica si ha enviado el formulario con los campos 'user' y 'password'
    if (isset($_POST['user']) && isset($_POST['password'])) {
        session_start();

        // Limpia el nombre de usuario para evitar inyecciones SQL
        $user =  $_POST['user'];
        // Obtiene la contraseña tal como fue ingresada (sin escape porque será verificada con password_verify)
        $password = $_POST['password'];

        if (strlen($user) < 3) {
            echo "El nombre de usuario debe tener al menos 3 caracteres.";
            exit;
        } else if (strlen($password) < 8 || 
            !preg_match('/[A-Z]/', $password) || 
            !preg_match('/[0-9]/', $password)) {
            echo "La contraseña debe tener al menos 8 caracteres, una mayúscula y un número.";
            exit;
        }

        // Crea la consulta SQL para buscar al usuario por su nombre
        $sql = "SELECT contra_usuario FROM tbl_usuarios WHERE nombre_usuario = '$user'";
        
        // Ejecuta la consulta en la base de datos
        $result = mysqli_query($conn, $sql);

        // Verifica si la consulta tuvo resultados (es decir, si el usuario existe)
        if ($result && mysqli_num_rows($result) > 0) {

            // Extrae los datos del usuario encontrado
            $row = mysqli_fetch_assoc($result);

            // Verifica que la contraseña ingresada coincida con la almacenada (hasheada) en la base de datos
            if ($password === $row['contra_usuario']) {
                
                // Si la contraseña es correcta, guarda el nombre de usuario en la sesión
                $_SESSION['usuario'] = $user;

                // Redirige al usuario a la página principal
                header("Location: ../index.php");
                exit();
            } else {
                // Si la contraseña no coincide, se guarda un mensaje de error
                $error = "Contraseña incorrecta.";
            }
        } else {
            // Si no se encontró ningún usuario con ese nombre, se guarda un mensaje de error
            $error = "Usuario no encontrado.";
        }

    } else {
        // Si no se enviaron todos los campos del formulario, se guarda un mensaje de error
        $error = "Por favor, rellena todos los campos.";
    }

    // Cierra la conexión con la base de datos
    mysqli_close($conn);

    // Si ocurrió algún error, lo muestra al usuario
    if (isset($error)) {
        echo $error;
    }
?>
