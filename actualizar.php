<?php
include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

// UPDATE: Actualiza nombre, email y telefono DONDE el id coincida
$stmt = $conexion->prepare("UPDATE usuarios SET nombre=?, email=?, telefono=? WHERE id=?");
$stmt->bind_param("sssi", $nombre, $email, $telefono, $id);

if ($stmt->execute()) {
    echo "<h2>Registro actualizado correctamente</h2>";
} else {
    echo "Error al actualizar: " . $stmt->error;
}

echo "<br><br><a href='index.php'>Volver al inicio</a>";

$stmt->close();
$conexion->close();
?>