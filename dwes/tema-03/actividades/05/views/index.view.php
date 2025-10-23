<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Cargar Bootstrapp -->
     <?php include 'views/layouts/head.layout.php'; ?>

        <title>Proyecto Gestión de libros</title>

</head>

<body>
    <!-- capa principal -->
    <div class="container mt-3">

        <!-- cabecera del documento -->
        <?php include 'views/partials/header.partial.php';?>

        <!-- Navegador o menu de libros --> 
        <?php include 'views/partials/menu.partial.php';?>
        <!-- contenido principal -->
        <main>

            <h5 class="mb-3 text-center"><i class="bi bi-book"></i> Lista de Libros</h5>

            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle shadow-sm">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-end">ID</th>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Género</th>
                            <th>Editorial</th>
                            <th class="text-end">Precio (€)</th>
                            <th class="text-end">Acciones</th>

                            <!-- Botones de acción -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($libros as $libro): ?>
                        <tr>
                            <td class="text-end"><?= $libro['id'] ?></td>
                            <td><?= htmlspecialchars($libro['titulo']) ?></td>
                            <td><?= htmlspecialchars($libro['autor']) ?></td>
                            <td><?= htmlspecialchars($libro['genero']) ?></td>
                            <td><?= htmlspecialchars($libro['editorial']) ?></td>
                            <td class="text-end"><?= number_format($libro['precio'], 2, ',', '.') ?></td>
                            <td class="text-end">
                                <a href="editar.php?id=<?= $libro['id'] ?>" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                                <a href="borrar.php?id=<?= $libro['id'] ?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" class="fw-bold">Total de libros: <?= count($libros) ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </main>

        <!-- Pie de página -->
        <?php include 'views/partials/footer.partial.php';?>

    <!-- JavaScript Bootstrap -->
    <?php include 'views/layouts/js_bootstrap.layout.php'; ?>
</body>

</html>