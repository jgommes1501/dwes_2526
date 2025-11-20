<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.layout.php'; ?>
    <title>Nuevo Alumno</title>
</head>

<body>
<div class="container mt-3">

    <!-- Cabecera -->
    <?php include 'views/partials/header.partial.php'; ?>

    <!-- Menú -->
    <?php include 'views/partials/menu.partial.php'; ?>

    <main>
        <form method="post" action="create.php">
        <legend>Formulario nuevo Alumno</legend>

        <!-- Se excluyen los campos id, población, provincia. -->
            <!-- <div class="mb-3">
                <label class="form-label fw-bold">ID:</label>
                <input type="text" class="form-control" name="id" >
            </div> -->

            <div class="mb-3">
                <label class="form-label fw-bold">Nombre:</label>
                <input type="text" class="form-control" name="nombre" >
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Apellidos:</label>
                <input type="text" class="form-control" name="apellidos" >
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Email:</label>
                <input type="email" class="form-control" name="email" >
            </div>
    
            <div class="mb-3">
                <label class="form-label fw-bold">DNI:</label>
                <input type="text" class="form-control" name="dni" >
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Teléfono:</label>
                <input type="tel" class="form-control" name="telefono" >
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Nacionalidad:</label>
                <input type="text" class="form-control" name="nacionalidad" >
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Fecha de nacimiento:</label>
                <input type="date" class="form-control" name="fecha_nacimiento" >
            </div>



            <!-- Select dinámico de cursos -->
            <div class="mb-3">
                <label for="curso" class="form-label fw-bold">Cursos:</label>
                <select class="form-select" name="curso_id" required>
                    <option selected disabled>Seleccione un curso</option>
                    <?php foreach ($cursos as $curso): ?>
                        <option value="<?= $curso['id'] ?>"
                            <?= (isset($articulo['curso']) && $articulo['curso'] == $curso['id']) ? 'selected' : '' ?>>
                            <?= $curso['curso'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Botones de acción -->
            <div class="mb-3">
                <a class="btn btn-secondary" href="index.php">Volver</a>
                <button type="reset" class="btn btn-warning">Limpiar formulario</button>
                <button type="submit" class="btn btn-primary">Guardar artículo</button>
                
                
            </div>
        </form>

        <br>
        <br>
        <br>
    </main>

    <!-- Pie de página -->
    <?php include 'views/partials/footer.partial.php'; ?>

</div>

<?php include 'views/layouts/js_bootstrap.layout.php'; ?>
</body>
</html>
