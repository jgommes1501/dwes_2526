<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.layout.php'; ?>
    <title>Proyecto CRUD Tabla Artículos</title>
</head>

<body>
    <div class="container mt-3">

        <!-- Cabecera -->
        <?php include 'views/partials/header.partial.php'; ?>

        <!-- Menú principal -->
        <?php include 'views/partials/menu.partial.php'; ?>

        <!-- Contenido principal -->
        <main>
            <h5 class="mb-3 text-center"><i class="bi bi-box-seam"></i> Tabla de Artículos</h5>

            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle shadow-sm">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-end">ID</th>
                            <th>Descripción</th>
                            <th>Modelo</th>
                            <th>Categoria</th>
                            <th>Stock</th>
                            <th class="text-end">Precio (€)</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articulos as $articulo): ?>
                        <tr>
                            <td class="text-end"><?= $articulo['id'] ?></td>
                            <td><?= htmlspecialchars($articulo['descripcion']) ?></td>
                            <td><?= htmlspecialchars($articulo['modelo']) ?></td>
                            <td><?= htmlspecialchars($articulo['categoria']) ?></td>
                            <td><?= htmlspecialchars($articulo['stock']) ?></td>
                            <td class="text-end"><?= number_format($articulo['precio'], 2, ',', '.') ?></td>
                            <td class="text-end">
                                <a href="edit.php?id=<?= $articulo['id'] ?>" class="btn btn-sm btn-warning" onclick="return confirm('¿Estás seguro de que deseas editar este artículo?')"><i class="bi bi-pencil-square"></i></a>
                                <a href="delete.php?id=<?= $articulo['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este artículo?')"><i class="bi bi-trash"></i></a>
                                <a href="ver.php?id=<?= $articulo['id'] ?>" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" class="fw-bold">Total de artículos: <?= count($articulos) ?></td>
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
