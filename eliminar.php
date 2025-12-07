<?php
include("conexion.php");

$id = $_GET['id'];

// DELETE: Borra de usuarios DONDE el id coincida
$stmt = $conexion->prepare("DELETE FROM usuarios WHERE id=?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "<h2>Registro eliminado correctamente</h2>";
} else {
    echo "Error al eliminar: " . $stmt->error;
}

echo "<br><br><a href='index.php'>Volver al inicio</a>";

$stmt->close();
$conexion->close();
?>