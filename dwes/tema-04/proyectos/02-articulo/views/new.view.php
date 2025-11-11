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
        <!-- Detalles del artículo -->
        <legend>Detalles del Artículo</legend>

        <?php if (isset($articulo)): ?>
            <div class="mb-3">
                <label class="form-label fw-bold">ID:</label>
                <p><?= htmlspecialchars($articulo['id']) ?></p>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Descripción:</label>
                <p><?= htmlspecialchars($articulo['descripcion']) ?></p>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Modelo:</label>
                <p><?= htmlspecialchars($articulo['modelo']) ?></p>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Categoría:</label>
                <p><?= htmlspecialchars($articulo['categoria']) ?></p>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Stock:</label>
                <p><?= htmlspecialchars($articulo['stock']) ?></p>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Precio:</label>
                <p><?= htmlspecialchars($articulo['precio']) ?> €</p>
            </div>

            <!-- Botones de acción -->
            <div class="mb-3">
                <a class="btn btn-secondary" href="index.php">Volver</a>
                <a class="btn btn-warning" href="edit.php?id=<?= $articulo['id'] ?>">Editar</a>
                <a class="btn btn-danger" href="delete.php?id=<?= $articulo['id'] ?>" 
                   onclick="return confirm('¿Seguro que deseas eliminar este artículo?')">Eliminar</a>
            </div>

        <?php else: ?>
            <div class="alert alert-danger">No se encontró el artículo solicitado.</div>
        <?php endif; ?>
    </main>

    <?php include 'views/partials/footer.partial.php'; ?>
</div>

<?php include 'views/layouts/js_bootstrap.layout.php'; ?>
</body>
</html>
