<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.layout.php'; ?>
    <title>Proyecto 4.1 CRUD - Artículos POO con Encapsulamiento</title>
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
                            <th>Marca</th>
                            <th>Categorías</th>
                            <th>Unidades</th>
                            <th class="text-end">Precio (€)</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articulos as $articulo): ?>
                        <tr>
                            <td class="text-end"><?= $articulo -> getId() ?></td>
                            <td><?= $articulo -> getDescripcion() ?></td>
                            <td><?= $articulo -> getModelo() ?></td>
                            <td><?= $articulo -> getMarca() ?></td>
                            <td><?= implode(', ', Class_tabla_articulos::categorias_a_nombres($articulo->getCategorias())) ?></td>
                            <td><?= htmlspecialchars($articulo -> getUnidades()) ?></td>
                            <td class="text-end"><?= number_format($articulo -> getPrecio(), 2, ',', '.') ?></td>
                            <td class="text-end">
                                <a href="edit.php?id=<?= $articulo -> getId() ?>" class="btn btn-sm btn-primary me-1">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>
                                <a href="delete.php?id=<?= $articulo -> getId() ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este artículo?');">
                                    <i class="bi bi-trash"></i> Eliminar
                                </a>
                                <a href="show.php?id=<?= $articulo -> getId() ?>" class="btn btn-sm btn-info">
                                    <i class="bi bi-eye"></i> Ver
                                </a>
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
