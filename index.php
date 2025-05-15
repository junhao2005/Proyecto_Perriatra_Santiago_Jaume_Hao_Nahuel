
<?php

include "./services/database.php"





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" href="./img/paw-solid.svg">
    <link rel="stylesheet" href="css/styles.css">
    <title>🐾Perriatra🐾</title>

</head>
<body>
    
    <section>
        <div>
            <form action="add_user.php" method="POST" ></form>
        </div>
    </section>
<!-- Saludar al usuario logeado y con posibilidad de cerrar sesión -->
    <header> 
        <h1>Festival Internacional de Música</h1>
        <p>Bienvenido, <?php echo ($_SESSION['username']); ?>! 
            <a href="proces/logout.php">Cerrar sesión</a>
        </p>
    </header>
    
</body>
</html>






<!-- git switch nahuel -->