<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.layout.php'; ?>
    <title>Ver artículo</title>
</head>

<body>
<div class="container mt-3">

    <!-- Cabecera -->
    <?php include 'views/partials/header.partial.php'; ?>

    <!-- Menú -->
    <?php include 'views/partials/menu.partial.php'; ?>

    <main>
        <form>
        <legend>Formulario Editar Artículo</legend>
            <div class="mb-3">
                <label class="form-label fw-bold">ID:</label>
                <input type="text" class="form-control" name="id" value="<?= $articulo->getId() ?>" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Descripción:</label>
                <input type="text" class="form-control" name="descripcion"  value="<?= $articulo->getDescripcion() ?>" disabled >
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Modelo:</label>
                <input type="text" class="form-control" name="modelo"  value="<?= $articulo->getModelo() ?>" disabled >
            </div>

             <div class="mb-3">
                <label class="form-label fw-bold">Marcas:</label>
                <input type="text" class="form-control" name="marcas"  value="<?= $marcas[$articulo->getMarca()] ?>" disabled >
            </div>

             <div class="mb-3">
                <label class="form-label fw-bold">Categorías:</label>
                <input type="text" class="form-control" name="categoria"  value="<?= implode(', ', Class_tabla_articulos::categorias_a_nombres($articulo->getCategorias())) ?>" disabled >
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Unidades:</label>
                <input type="number" class="form-control" name="unidades" value="<?= $articulo->getUnidades() ?>" disabled >
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Precio:</label>
                <input type="number" class="form-control" name="precio" step ="0.01"  value="<?= $articulo->getPrecio() ?>" disabled >
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
