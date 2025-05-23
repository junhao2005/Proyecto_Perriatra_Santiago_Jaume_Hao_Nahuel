<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registro - Patitas Felices</title>
  <link rel="stylesheet" href="../css/styles.css" />
</head>
<body>
  <div class="container">
    <div class="form-container">
      <h1>🐾 Registro</h1>
      <!-- Formulario de registro -->
      <form>
        <!-- Campo para el nombre -->
        <label for="nombre">Nombre</label> 
        <input type="text" id="nombre" required /><br>

        <!-- Campo para los apellidos -->
        <label for="apellidos">Apellidos</label> 
        <input type="text" id="apellidos" required /><br>

        <!-- Campo para el correo electrónico -->
        <label for="correo">Correo electrónico</label> 
        <input type="email" id="correo" required /><br>

        <!-- Campo para la contraseña -->
        <label for="password">Contraseña</label> 
        <input type="password" id="password" required /><br>

        <!-- Campo para confirmar la contraseña -->
        <label for="confirm-password">Confirmar contraseña</label>
        <input type="password" id="confirm-password" required /> <br>

        <!-- Botón para enviar el formulario -->
        <button type="submit">Registrarse</button>
        
        <!-- Enlace para ir al formulario de inicio de sesión -->
        <p class="link">¿Ya tienes cuenta? <a href="../view/login.php">Inicia sesión aquí</a></p>
      </form>
    </div>
  </div>
</body>
</html>
