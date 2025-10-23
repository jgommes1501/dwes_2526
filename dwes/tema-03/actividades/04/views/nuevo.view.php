<?php
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 3.3 Tabla de Libros</title>

    <!-- css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- capa principal -->
    <div class="container mt-3">

        <!-- cabecera del documento -->
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-journal-bookmark-fill"></i>
            <span class="fs-6">Actividad 3.3 - Gestión de libros</span>
        </header>
        <!-- contenido principal -->
        <main>
            <!-- Formulario añadir nuevo libro  -->
             <legend>Formulario Nuevo Libro</legend>
             <form action="create.php" method="post">

             <div class="mb-3">
                 <label for="titulo" class="form-label">Titulo:</label>
                 <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>  
            <div class="mb-3">
                 <label for="autor" class="form-label">Autor:</label>
                 <input type="text" class="form-control" id="autor" name="autor" required>
            </div>  
            <div class="mb-3">
                 <label for="anio" class="form-label">Año:</label>
                 <input type="number" class="form-control" id="anio" name="anio" required>
            </div>  
            <div class="mb-3">
                 <label for="genero" class="form-label">Género:</label>
                 <input type="text" class="form-control" id="genero" name="genero" required>
            </div>
            <div class="mb-3">
                 <label for="editorial" class="form-label">Editorial:</label>
                 <input type="text" class="form-control" id="editorial" name="editorial" required>
            </div>
            <div class="mb-3">
                 <label for="precio" class="form-label">Precio:</label>
                 <input type="text" class="form-control" id="precio" name="precio" required>
            </div>

            <!-- Botones de acción -->
            <div class="mb-3">
                <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
                <button type="reset" class="btn btn-secondary">Limpiar</button>
                <button type="submit" class="btn btn-primary">Guardar Libro</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>