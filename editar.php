<?php
include("conexion.php");

// Recibimos el ID de la URL
$id = $_GET['id'];
$result = $conexion->query("SELECT * FROM usuarios WHERE id = $id");
$usuario = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Usuario</title>
<!-- Usamos un poco de estilo básico para que no se vea tan mal -->
<style>
    body { font-family: sans-serif; padding: 20px; }
    form { background: #f9f9f9; padding: 20px; border: 1px solid #ddd; max-width: 400px; }
    input { display: block; margin-bottom: 10px; width: 90%; padding: 8px; }
    button { padding: 10px 20px; background: #28a745; color: white; border: none; cursor: pointer; }
</style>
</head>

<body>

<h2>Editar Usuario</h2>

<form action="actualizar.php" method="POST">
    <!-- El ID viaja oculto, el usuario no necesita verlo pero es vital para el UPDATE -->
    <input type="hidden" name="id" value="<?= $usuario['id'] ?>">

    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?= $usuario['nombre'] ?>" required>

    <label>Email:</label>
    <input type="email" name="email" value="<?= $usuario['email'] ?>" required>

    <label>Teléfono:</label>
    <input type="text" name="telefono" value="<?= $usuario['telefono'] ?>">

    <button type="submit">Actualizar Datos</button>
</form>

<br>
<a href="index.php">Cancelar y Volver</a>

</body>
</html>