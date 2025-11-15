<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.layout.php'; ?>
    <title>Nuevo Alumno - Sin Encapsulamiento</title>
</head>

<body>
<div class="container mt-3">

    <!-- Cabecera -->
    <?php include 'views/partials/header.partial.php'; ?>

    <!-- Menú -->
    <?php include 'views/partials/menu.partial.php'; ?>

    <main>
        <form method="post" action="create.php">
        <legend>Formulario Nuevo Alumno</legend>
            
            <div class="mb-3">
                <label class="form-label fw-bold">Nombre:</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Apellidos:</label>
                <input type="text" class="form-control" name="apellidos" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Fecha Nacimiento:</label>
                <input type="date" class="form-control" name="f_nacimiento" required>
            </div>

            <!-- Select dinámico de cursos -->
            <div class="mb-3">
                <label for="curso" class="form-label fw-bold">Curso:</label>
                <select class="form-select" id="curso" name="curso" required>
                    <option selected disabled>Seleccione un curso</option>
                    <?php foreach ($cursos as $indice => $curso): ?>
                        <option value="<?= $indice ?>">
                            <?= htmlspecialchars($curso) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Checkboxes de asignaturas -->
            <div class="mb-3">
                <label class="form-label fw-bold">Seleccione las asignaturas:</label>
                <div class="form-control">
                    <?php foreach ($asignaturas as $indice => $asignatura): ?>
                        <div class="form-check form-check-inline">
                            <input 
                                class="form-check-input" 
                                type="checkbox" 
                                name="asignaturas[]" 
                                value="<?= $indice ?>"
                                id="asignatura_<?= $indice ?>">
                            <label class="form-check-label" for="asignatura_<?= $indice ?>">
                                <?= htmlspecialchars($asignatura) ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Botones de acción -->
            <div class="mb-3">
                <a class="btn btn-secondary" href="index.php">Cancelar</a>
                <button type="reset" class="btn btn-warning">Limpiar</button>
                <button type="submit" class="btn btn-primary">Crear Alumno</button>
            </div>
        </form>
    </main>

    <!-- Pie de página -->
    <?php include 'views/partials/footer.partial.php'; ?>

</div>

<?php include 'views/layouts/js_bootstrap.layout.php'; ?>
</body>
</html>
