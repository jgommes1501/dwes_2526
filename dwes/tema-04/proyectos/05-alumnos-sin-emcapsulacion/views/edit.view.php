<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.layout.php'; ?>
    <title>Editar Alumno - Sin Encapsulamiento</title>
</head>

<body>
<div class="container mt-3">

    <!-- Cabecera -->
    <?php include 'views/partials/header.partial.php'; ?>

    <!-- Menú -->
    <?php include 'views/partials/menu.partial.php'; ?>

    <main>
        <form method="post" action="update.php?indice=<?= $indice ?>">
        <legend>Formulario Editar Alumno</legend>
            
            <div class="mb-3">
                <label class="form-label fw-bold">ID:</label>
                <input type="text" class="form-control" value="<?= $alumno->id ?>" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="<?= $alumno->nombre ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Apellidos:</label>
                <input type="text" class="form-control" name="apellidos" value="<?= $alumno->apellidos ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Email:</label>
                <input type="email" class="form-control" name="email" value="<?= $alumno->email ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Fecha Nacimiento:</label>
                <input type="date" class="form-control" name="f_nacimiento" value="<?= $alumno->f_nacimiento ?>" required>
            </div>

            <!-- Select dinámico de cursos -->
            <div class="mb-3">
                <label for="curso" class="form-label fw-bold">Curso:</label>
                <select class="form-select" id="curso" name="curso" required>
                    <option selected disabled>Seleccione un curso</option>
                    <?php foreach ($cursos as $indice_curso => $nombre_curso): ?>
                        <option value="<?= $indice_curso ?>"
                            <?= ($alumno->curso == $indice_curso) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($nombre_curso) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Checkboxes de asignaturas -->
            <div class="mb-3">
                <label class="form-label fw-bold">Seleccione las asignaturas:</label>
                <div class="form-control">
                    <?php foreach ($asignaturas as $indice_asig => $nombre_asig): ?>
                        <div class="form-check form-check-inline">
                            <input 
                                class="form-check-input" 
                                type="checkbox" 
                                name="asignaturas[]" 
                                value="<?= $indice_asig ?>"
                                id="asignatura_<?= $indice_asig ?>"
                                <?= in_array($indice_asig, $alumno->asignaturas) ? 'checked' : '' ?>>
                            <label class="form-check-label" for="asignatura_<?= $indice_asig ?>">
                                <?= htmlspecialchars($nombre_asig) ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Botones de acción -->
            <div class="mb-3">
                <a class="btn btn-secondary" href="index.php">Cancelar</a>
                <button type="submit" class="btn btn-primary">Actualizar Alumno</button>
            </div>
        </form>
    </main>

    <!-- Pie de página -->
    <?php include 'views/partials/footer.partial.php'; ?>

</div>

<?php include 'views/layouts/js_bootstrap.layout.php'; ?>
</body>
</html>
