<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.layout.php'; ?>
    <title>Nuevo artículo</title>
</head>

<body>
<div class="container mt-3">

    <!-- Cabecera -->
    <?php include 'views/partials/header.partial.php'; ?>

    <!-- Menú -->
    <?php include 'views/partials/menu.partial.php'; ?>

    <main>
        <form method="post" action="update.php"?id=<?= $id ?>>
        <legend>Formulario Editar Artículo</legend>
            <div class="mb-3">
                <label class="form-label fw-bold">ID:</label>
                <input type="text" class="form-control" name="id" value="<?= $articulo->getId() ?>" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Descripción:</label>
                <input type="text" class="form-control" name="descripcion"  value="<?= $articulo->getDescripcion() ?>" require >
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Modelo:</label>
                <input type="text" class="form-control" name="modelo"  value="<?= $articulo->getModelo() ?>" require >
            </div>

            <!-- Select dinámico de marcas -->
            <div class="mb-3">
                <label for="marca" class="form-label fw-bold">Marca:</label>
                <select class="form-select" id="marca" name="marca" required>
                    <option selected disabled>Seleccione una marca</option>
                    <?php foreach ($marcas as $indice => $marca): ?>
                        <option value="<?= $indice ?>"
                        <?= ($articulo->getMarca() == $indice)? 'selected' : null ?>
                        >
                        <?= $marca ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Checkboxes de categorías -->
            <div class="mb-3">
                <label class="form-label fw-bold">Seleccione las categorías:</label>
                <div class="form-control">
                    <?php foreach ($categorias as $indice => $categoria): ?>
                        <div class="form-check form-check-inline">
                            <input 
                                class="form-check-input" 
                                type="checkbox" 
                                name="categorias[]" 
                                value="<?= $indice ?>"
                                <?= in_array($indice, $articulo->getCategorias())? 'checked' : null ?>
                                >
                            <label class="form-check-label">
                                <?= $categoria?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Unidades:</label>
                <input type="number" class="form-control" name="unidades" value="<?= $articulo->getUnidades() ?>" require >
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Precio:</label>
                <input type="number" class="form-control" name="precio" step ="0.01"  value="<?= $articulo->getPrecio() ?>" require >
            </div>

            <!-- Botones de acción -->
            <div class="mb-3">
                <a class="btn btn-secondary" href="index.php">Volver</a>
                <button type="submit" class="btn btn-primary">Actualizar artículo</button>
            </div>
        </form>
    </main>

    <!-- Pie de página -->
    <?php include 'views/partials/footer.partial.php'; ?>

</div>

<?php include 'views/layouts/js_bootstrap.layout.php'; ?>
</body>
</html>
