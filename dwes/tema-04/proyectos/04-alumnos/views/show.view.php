<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.layout.php'; ?>
    <title>Ver Alumno</title>
</head>

<body>
<div class="container mt-3">

    <!-- Cabecera -->
    <?php include 'views/partials/header.partial.php'; ?>

    <!-- Menú -->
    <?php include 'views/partials/menu.partial.php'; ?>

    <main>
        <form>
        <legend>Detalles del Alumno</legend>
            
            <div class="mb-3">
                <label class="form-label fw-bold">ID:</label>
                <input type="text" class="form-control" value="<?= $alumno->id ?>" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Nombre:</label>
                <input type="text" class="form-control" value="<?= $alumno->nombre ?>" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Apellidos:</label>
                <input type="text" class="form-control" value="<?= $alumno->apellidos ?>" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Email:</label>
                <input type="email" class="form-control" value="<?= $alumno->email ?>" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Fecha Nacimiento:</label>
                <input type="text" class="form-control" value="<?= date('d/m/Y', strtotime($alumno->f_nacimiento)) ?>" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Edad:</label>
                <input type="text" class="form-control" value="<?= $alumno->getEdad() ?> años" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Curso:</label>
                <input type="text" class="form-control" value="<?= $cursos[$alumno->curso] ?>" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Asignaturas:</label>
                <input type="text" class="form-control" value="<?php 
                    $asig_alumno = [];
                    foreach ($alumno->asignaturas as $indice_asig) {
                        $asig_alumno[] = $asignaturas[$indice_asig];
                    }
                    echo implode(', ', $asig_alumno);
                ?>" disabled>
            </div>

            <!-- Botones de acción -->
            <div class="mb-3">
                <a class="btn btn-secondary" href="index.php">Volver</a>
            </div>
        </form>
    </main>

    <!-- Pie de página -->
    <?php include 'views/partials/footer.partial.php'; ?>

</div>

<?php include 'views/layouts/js_bootstrap.layout.php'; ?>
</body>
</html>
