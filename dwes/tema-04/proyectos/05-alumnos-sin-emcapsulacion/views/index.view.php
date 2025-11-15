<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.layout.php'; ?>
    <title>Proyecto 4.5 - Panel de Control de Alumnos SIN ENCAPSULAMIENTO</title>
</head>

<body>
    <div class="container mt-3">

        <!-- Cabecera -->
        <?php include 'views/partials/header.partial.php'; ?>

        <!-- Menú principal -->
        <?php include 'views/partials/menu.partial.php'; ?>

        <!-- Contenido principal -->
        <main>
            <h5 class="mb-3 text-center"><i class="bi bi-person-vcard-fill"></i> Tabla de Alumnos</h5>

            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle shadow-sm">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center">ID</th>
                            <th>Alumno</th>
                            <th>Email</th>
                            <th class="text-center">Fecha Nacimiento</th>
                            <th class="text-center">Edad</th>
                            <th>Curso</th>
                            <th>Asignaturas</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($alumnos as $indice => $alumno): ?>
                        <tr>
                            <td class="text-center"><?= $alumno->id ?></td>
                            <td><?= $alumno->apellidos . ', ' . $alumno->nombre ?></td>
                            <td><?= $alumno->email ?></td>
                            <td class="text-center"><?= date('d/m/Y', strtotime($alumno->f_nacimiento)) ?></td>
                            <td class="text-center"><?= $alumno->getEdad() ?></td>
                            <td><?= $cursos[$alumno->curso] ?></td>
                            <td>
                                <?php 
                                    $asig_alumno = [];
                                    foreach ($alumno->asignaturas as $indice_asig) {
                                        $asig_alumno[] = $asignaturas[$indice_asig];
                                    }
                                    echo implode(', ', $asig_alumno);
                                ?>
                            </td>
                            <td class="text-center">
                                <a href="edit.php?indice=<?= $indice ?>" class="btn btn-sm btn-primary" title="Editar">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="delete.php?indice=<?= $indice ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este alumno?');" title="Eliminar">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="show.php?indice=<?= $indice ?>" class="btn btn-sm btn-info" title="Mostrar">
                                    <i class="bi bi-eye"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="8" class="fw-bold">Total de alumnos: <?= count($alumnos) ?></td>
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
