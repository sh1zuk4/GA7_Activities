<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, email, telefono) VALUES (?, ?, ?)");
    // "sss" significa que son 3 Strings (texto)
    $stmt->bind_param("sss", $nombre, $email, $telefono);

    if ($stmt->execute()) {
        echo "<h2>Registro guardado correctamente</h2>";
        echo "<a href='index.php'>Volver al formulario</a>";
    } else {
        echo "Error al guardar: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
}
?>