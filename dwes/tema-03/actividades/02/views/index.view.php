<?php
// Vista: mostrar tabla con los datos del modelo $libros
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto 2.3 Tabla de Libros</title>

    <!-- css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <!-- capa principal -->
    <div class="container mt-3">

        <!-- cabecera del documento -->
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-journal-bookmark-fill"></i>
            <span class="fs-6">Proyecto 2.3 Tabla de Libros (MVC)</span>
        </header>

        <!-- contenido principal -->
        <main>

            <h5 class="mb-3 text-center"><i class="bi bi-book"></i> Lista de Libros</h5>

            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle shadow-sm">
                    <thead class="table-dark">
                        <tr>
                            <th class = "text-end">ID</th>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Género</th>
                            <th class = "text-end" >Precio (€)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($libros as $libro): ?>
                            <tr>
                                <td class = "text-end" ><?= $libro['id'] ?></td>
                                <td><?= htmlspecialchars($libro['titulo']) ?></td>
                                <td><?= htmlspecialchars($libro['autor']) ?></td>
                                <td><?= htmlspecialchars($libro['genero']) ?></td>
                                <td class = "text-end"><?= number_format($libro['precio'], 2, ',', '.') ?></td>
                            </tr>
                            
                        <?php endforeach; ?>
                    </tbody>
                        <tfoot>
                            <td colspan="4" class="fw-bold">Total de libros: <?= count($libros) ?> </td>
                        </tfoot>
                        </tr>
                </table>
            </div>

        </main>

        <!-- Pie de página -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2025 Jaime Gómez Mesa - DWES - 2 DAW - Curso 25/26</span>
            </div>
        </footer>

    </div>

    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
