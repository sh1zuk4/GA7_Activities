<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "ejemplo_php";

$conexion = new mysqli($servidor, $usuario, $clave, $bd);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>