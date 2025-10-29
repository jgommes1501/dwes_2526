<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.layout.php'; ?>
    <title>Añadir nuevo artículo</title>
</head>

<body>
<div class="container mt-3">

    <!-- Cabecera -->
    <?php include 'views/partials/header.partial.php'; ?>

    <!-- Menú -->
    <?php include 'views/partials/menu.partial.php'; ?>

    <main>
        <!-- Formulario añadir nuevo libro  -->
             <legend>Formulario Nuevo Artículo</legend>
             <form action="create.php" method="post">

             <div class="mb-3">
                 <label for="descripcion" class="form-label">Descripción:</label>
                 <input type="text" class="form-control" id="descripcion" name="descripcion" required>
            </div>  

            <div class="mb-3">
                 <label for="modelo" class="form-label">Modelo:</label>
                 <input type="text" class="form-control" id="modelo" name="modelo" required>
            </div>  
            <div class="mb-3">
                 <label for="categoria" class="form-label">Categoría:</label>
                 <input type="text" class="form-control" id="categoria" name="categoria" required>
            </div>
            <div class="mb-3">
                 <label for="stock" class="form-label">Stock:</label>
                 <input type="text" class="form-control" id="stock" name="stock" required>
            </div>
            <div class="mb-3">
                 <label for="precio" class="form-label">Precio:</label>
                 <input type="text" class="form-control" id="precio" name="precio" required>
            </div>

            <!-- Botones de acción -->
            <div class="mb-3">
                <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
                <button type="reset" class="btn btn-secondary">Limpiar</button>
                <button type="submit" class="btn btn-primary">Guardar Artículo</button>
            </div>
    </main>

    <?php include 'views/partials/footer.partial.php'; ?>
</div>

<?php include 'views/layouts/js_bootstrap.layout.php'; ?>
</body>
</html>
