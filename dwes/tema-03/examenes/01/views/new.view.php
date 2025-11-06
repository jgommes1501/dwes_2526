<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Cargar bootstrap -->
   <?php include 'views/layouts/head.layout.php'; ?>
    <title> Proyecto - CRUD Gestión Películas</title>
</head>

<body>

    <!-- capa principal -->
    <div class="container mt-3">

        <!-- cabecera del documento -->
        <?php include 'views/partials/header.partial.php'; ?>

        <!-- contenido principal -->
        <main>
            <!-- Formulario añadir nueva película -->
            <legend>Formulario Nuevo Película</legend>
            <form action="" method="">

                <!-- campo id -->
                <div class="mb-3">
                    <label for="id" class="form-label">ID:</label>
                    <input type="number" class="form-control" id="id">
                </div>

                <!-- campo titulo -->
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" class="form-control" id="titulo">

                <!-- campo idioma -->
                <div class="mb-3">
                    <label for="idioma" class="form-label">Idioma:</label>
                    <input type="text" class="form-control" id="idioma">
                </div>

                <!-- campo director -->
                <div class="mb-3">
                    <label for="director" class="form-label">Director:</label>
                    <input type="text" class="form-control" id="director">
                </div>

                <!-- campo genero -->
                <div class="mb-3">
                    <label for="genero" class="form-label">Géneros:</label>
                    <input type="text" class="form-control" id="genero">
                </div>

                <!-- campo año -->
                <div class="mb-3">
                    <label for="año" class="form-label">Año:</label>
                    <input type="number" class="form-control" id="año">

                <!-- campo recaudacion -->
                <div class="mb-3">
                    <label for="recaudacion" class="form-label">Recaudación:</label>
                    <input type="number" class="form-control" id="recaudacion">
                </div>

                <!-- botones de acción -->
                <div class="mb-3">
                    <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
                    <button type="reset" class="btn btn-secondary">Limpiar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
                

            <br>
            <br>
            <br>
        </main>
        <!-- pie de página -->
        <?php include 'views/partials/footer.partial.php'; ?>
    </div>

        <!-- javaScript bootstrap 5.3.8 -->
             <?php include 'views/layouts/js_bootstrap.layout.php'; ?>

</body>

</html>