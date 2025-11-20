<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.layout.php'; ?>
    <title>Proyecto 5.1 CRUD - Gestión de alumnos PHP y MySQL</title>
</head>

<body>
    <div class="container mt-3">

        <!-- Cabecera -->
        <?php include 'views/partials/header.partial.php'; ?>

        <!-- Menú principal -->
        <?php include 'views/partials/menu.partial.php'; ?>

        <!-- Contenido principal -->
        <main>
            <h5 class="mb-3 text-center"><i class="bi bi-box-seam"></i> Tabla de Alumnos</h5>

            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle shadow-sm">
                    <!-- cabecera de la tabla -->
                    <thead class="table-dark">
                        <tr>
                            <th class="text-end">ID</th>
                            <th>Alumno</th>
                            <th>Email</th>
                            <th>Nacionalidad</th>
                            <th>DNI</th>
                            <th>Edad</th>
                            <th class="text-end">Curso</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- $alumno es un objeto mysqli_result
                         Recorrer el objeto para obtener cada fila de la tabla
                         Usamos fetch_assoc() para obtener un array asociativo -->
                        <?php while ($alumno = $alumnos->fetch_assoc()): ?>
                        <tr>
                            <td class="text-end"><?= $alumno['id'] ?></td>
                            <td><?= $alumno['alumno'] ?></td>
                            <td><?= $alumno['email'] ?></td>
                            <td><?= $alumno['nacionalidad'] ?></td>
                            <td><?= $alumno['dni'] ?></td>
                            <td><?= $alumno['edad'] ?></td>
                            <td class="text-end"><?= $alumno['curso'] ?></td>

                            <td class="text-end">
                                <a href="edit.php?id=<?= $alumno['id'] ?>" class="btn btn-sm btn-primary me-1">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>
                                <a href="delete.php?id=<?= $alumno['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este artículo?');">
                                    <i class="bi bi-trash"></i> Eliminar
                                </a>
                                <a href="show.php?id=<?= $alumno['id'] ?>" class="btn btn-sm btn-info">
                                    <i class="bi bi-eye"></i> Ver
                                </a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" class="fw-bold">Total de Alumnos: <?= $alumnos->num_rows ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </main>

        <!-- Pie de página -->
        <?php include 'views/partials/footer.partial.php'; ?>

    </div>

    <!-- JavaScript Bootstrap -->
    <?php include 'views/layouts/js_bootstrap.layout.php'; ?>
</body>
</html>
