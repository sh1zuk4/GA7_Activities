<?php
include("conexion.php");
$resultado = $conexion->query("SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>CRUD Usuarios - Shizuka</title>
<!-- Bootstrap 5 para estilos rápidos -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body { background: #eef1f5; }
    .card { border-radius: 12px; }
    .btn-custom { padding: 5px 12px; font-size: 14px; }
</style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <!-- Formulario de Registro -->
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h2 class="text-center mb-4">Registrar Usuario</h2>
                    <form action="procesar.php" method="POST" class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Teléfono</label>
                            <input type="number" name="telefono" class="form-control">
                        </div>
                        <div class="col-md-6 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Tabla de Usuarios (Lectura de BD) -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="text-center mb-4">Usuarios Registrados</h2>
                    <table class="table table-bordered table-hover text-center align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($fila = $resultado->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $fila['id'] ?></td>
                                    <td><?= $fila['nombre'] ?></td>
                                    <td><?= $fila['email'] ?></td>
                                    <td><?= $fila['telefono'] ?></td>
                                    <td>
                                        <!-- Botón Editar -->
                                        <a class="btn btn-success btn-custom" href="editar.php?id=<?= $fila['id'] ?>">Editar</a>
                                        <!-- Botón Eliminar -->
                                        <a class="btn btn-danger btn-custom" 
                                           href="eliminar.php?id=<?= $fila['id'] ?>"
                                           onclick="return confirm('¿Seguro que deseas eliminar este usuario?');">
                                           Eliminar
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>