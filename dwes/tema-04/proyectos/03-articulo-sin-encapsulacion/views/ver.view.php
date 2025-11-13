<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.layout.php'; ?>
    <title>Mostrar Artículo</title>
</head>

<body>
    <div class="container mt-3">

        <?php include 'views/partials/header.partial.php'; ?>

        <main>
            <legend>Mostrar Artículo</legend>

            <!-- Formulario solo visual -->
            <form>

                <div class="mb-3">
                    <label class="form-label">ID:</label>
                    <input type="text" class="form-control" value="<?= $articulo['id'] ?>" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descripción:</label>
                    <input type="text" class="form-control" value="<?= $articulo['descripcion'] ?>" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Modelo:</label>
                    <input type="text" class="form-control" value="<?= $articulo['modelo'] ?>" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Categoría:</label>
                    <input type="text" class="form-control" value="<?= $articulo['categoria'] ?>" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Stock:</label>
                    <input type="text" class="form-control" value="<?= $articulo['stock'] ?>" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Precio:</label>
                    <input type="text" class="form-control" value="<?= $articulo['precio'] ?>" readonly>
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
