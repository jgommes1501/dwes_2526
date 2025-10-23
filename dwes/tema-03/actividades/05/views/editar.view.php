<?php
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Cargar Bootstrapp -->
     <?php include 'views/layouts/head.layout.php'; ?>
        <title>Editar libros</title>
</head>

<body>
    <!-- capa principal -->
    <div class="container mt-3">

        <!-- cabecera del documento -->
        <?php include 'views/partials/header.partial.php';?>
        <!-- contenido principal -->
        <main>
            <!-- Formulario añadir nuevo libro  -->
             <legend>Formulario Editar Libro</legend>
             <form action="create.php" method="post">
             <div class="mb-3">
                 <label for="id" class="form-label">ID:</label>
                 <input type="text" class="form-control" id="id" name="id" value="<?= $libro['id'] ?>" readonly>
             </div>
             <div class="mb-3">
                 <label for="titulo" class="form-label">Titulo:</label>
                 <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $libro['titulo'] ?>" required>
            </div>  
            <div class="mb-3">
                 <label for="autor" class="form-label">Autor:</label>
                 <input type="text" class="form-control" id="autor" name="autor" value="<?= $libro['autor'] ?>" required>
            </div>  
            <div class="mb-3">
                 <label for="genero" class="form-label">Género:</label>
                 <input type="text" class="form-control" id="genero" name="genero" value="<?= $libro['genero'] ?>" required>
            </div>
            <div class="mb-3">
                 <label for="editorial" class="form-label">Editorial:</label>
                 <input type="text" class="form-control" id="editorial" name="editorial" value="<?= $libro['editorial'] ?>" required>
            </div>
            <div class="mb-3">
                 <label for="precio" class="form-label">Precio:</label>
                 <input type="text" class="form-control" id="precio" name="precio" value="<?= $libro['precio'] ?>" required>
            </div>

            <!-- Botones de acción -->
            <div class="mb-3">
                <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Actualizar Libro</button>
            </div>

        </main>

    <!-- Pie de página -->
        <?php include 'views/partials/footer.partial.php';?>

    <!-- JavaScript Bootstrap -->
    <?php include 'views/layouts/js_bootstrap.layout.php'; ?>
</body>

</html>