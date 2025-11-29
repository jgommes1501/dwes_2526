<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Cargar bootstrap -->
    <?php require_once 'views/layouts/head.layout.php'; ?>
    <title>  Proyecto 5.1 - CRUD Gestión Corredores PHP y MySQL</title>
</head>

<body>

    <!-- capa principal -->
    <div class="container mt-3">

        <!-- cabecera del documento -->
        <?php require_once 'views/partials/header.partial.php'; ?>

        <!-- contenido principal -->
        <main>
            <!-- Detalles del corredor -->
            <legend>Detalles del Corredor</legend>

            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label fw-bold">ID:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $corredor->id ?>" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label fw-bold">Nombre:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $corredor->nombre ?>" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label fw-bold">Apellidos:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $corredor->apellidos ?>" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label fw-bold">Ciudad:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $corredor->ciudad ?>" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label fw-bold">Fecha Nacimiento:</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" value="<?= $corredor->fechaNacimiento ?>" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label fw-bold">Edad:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $corredor->edad ?> años" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label fw-bold">Sexo:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $corredor->sexo == 'H' ? 'Hombre' : ($corredor->sexo == 'M' ? 'Mujer' : 'No especificado') ?>" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label fw-bold">Email:</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" value="<?= $corredor->email ?>" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label fw-bold">DNI:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $corredor->dni ?>" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label fw-bold">Categoría:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $nombreCategoria ?>" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label fw-bold">Club:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $nombreClub ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>

            <!-- botones de acción -->
            <div class="mt-3">
                <a class="btn btn-secondary" href="index.php" role="button">Volver</a>
                <a class="btn btn-warning" href="edit.php?id=<?= $corredor->id ?>" role="button">Editar</a>
            </div>

            <br>
            <br>
            <br>
        </main>
        <!-- pie de página -->
        <?php require_once 'views/partials/footer.partial.php'; ?>

        <!-- javaScript bootstrap 5.3.8 -->
        <?php require_once 'views/layouts/js_bootstrap.layout.php'; ?>
</body>

</html>