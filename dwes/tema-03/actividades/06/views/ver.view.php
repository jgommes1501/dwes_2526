<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.layout.php'; ?>
    <title>Mostrar Libro</title>
</head>

<body>
    <div class="container mt-3">

        <?php include 'views/partials/header.partial.php'; ?>

        <main>
            <legend>Mostrar Libro</legend>

            <!-- Formulario solo visual -->
            <form>

                <div class="mb-3">
                    <label class="form-label">ID:</label>
                    <input type="text" class="form-control" value="<?= $libro['id'] ?>" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Título:</label>
                    <input type="text" class="form-control" value="<?= $libro['titulo'] ?>" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Autor:</label>
                    <input type="text" class="form-control" value="<?= $libro['autor'] ?>" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Género:</label>
                    <input type="text" class="form-control" value="<?= $libro['genero'] ?>" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Editorial:</label>
                    <input type="text" class="form-control" value="<?= $libro['editorial'] ?>" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Precio:</label>
                    <input type="text" class="form-control" value="<?= $libro['precio'] ?>" readonly>
                </div>

                <!-- Botones de acción -->
                <div class="mt-4">
                    <a class="btn btn-primary" href="index.php">Volver</a>
                </div>

            </form>
        </main>

        <?php include 'views/partials/footer.partial.php'; ?>
        <?php include 'views/layouts/js_bootstrap.layout.php'; ?>
    </div>
</body>

</html>
