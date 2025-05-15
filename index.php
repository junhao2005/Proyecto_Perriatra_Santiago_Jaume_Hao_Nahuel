<?php




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>🐾Perriatra🐾</title>

</head>
<body>
<!-- Saludar al usuario logeado y con posibilidad de cerrar sesión -->
    <header> 
        <h1>Festival Internacional de Música</h1>
        <p>Bienvenido, <?php echo ($_SESSION['username']); ?>! 
            <a href="proces/logout.php">Cerrar sesión</a>
        </p>
    </header>
    
</body>
</html>


