<?php
include "../services/database.php";
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

if (!isset($_GET['chip'])) {
    echo "Chip de mascota no válido.";
    exit();
}

$chip = $_GET['chip'];

$sql = "SELECT * FROM mascotas WHERE chip = '$chip'";
$result = mysqli_query($conn, $sql);
$mascota = mysqli_fetch_assoc($result);

if (!$mascota) {
    echo "Mascota no encontrada.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Modificar Mascota</title>
</head>
<body>
<div class="header">
    <h2>Modificar Mascota</h2>
    <a href="index.php"><button class="btn-back">Atrás</button></a>
</div>

<form action="update_mascota.php" method="POST">
    <input type="hidden" name="chip" value="<?php echo $mascota['chip']; ?>">

    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $mascota['nombre']; ?>" required>

    <label>Sexo:</label>
    <select name="sexo" required>
        <option value="M" <?php if($mascota['sexo'] == 'M') echo 'selected'; ?>>Macho</option>
        <option value="H" <?php if($mascota['sexo'] == 'H') echo 'selected'; ?>>Hembra</option>
    </select>

    <label>Fecha de nacimiento:</label>
    <input type="date" name="fecha_nacimiento" value="<?php echo $mascota['fecha_nacimiento']; ?>" required>

    <label>Peso:</label>
    <input type="number" step="0.1" name="peso" value="<?php echo $mascota['peso']; ?>" required>

    <label>Vacunado:</label>
    <select name="vacunado" required>
        <option value="1" <?php if($mascota['vacunado']) echo 'selected'; ?>>Sí</option>
        <option value="0" <?php if(!$mascota['vacunado']) echo 'selected'; ?>>No</option>
    </select>

    <label>ID Especie:</label>
    <input type="number" name="id_especie" value="<?php echo $mascota['id_especie']; ?>" required>

    <label>ID Propietario:</label>
    <input type="number" name="id_propietario" value="<?php echo $mascota['id_propietario']; ?>" required>

    <button type="submit">Guardar cambios</button>
</form>
</body>
</html>
