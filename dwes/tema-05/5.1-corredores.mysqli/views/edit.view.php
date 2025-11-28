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
            <!-- Formulario edición corredor -->
            <legend>Formulario Edición Corredor</legend>
            <form action="update.php?id=<?=  $corredor_id ?>" method="POST">

                <!-- campo nombre -->
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" value="<?=  $corredor->nombre ?>" required>
                </div>

                <!-- campo apellidos -->
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos:</label>
                    <input type="text" class="form-control" name="apellidos" value="<?=  $corredor->apellidos ?>" required>
                </div>

                <!-- campo ciudad -->
                <div class="mb-3">
                    <label for="ciudad" class="form-label">Ciudad:</label>
                    <input type="text" class="form-control" name="ciudad" value="<?=  $corredor->ciudad ?>" required>
                </div>

                <!-- campo fecha nacimiento -->
                <div class="mb-3">
                    <label for="fechaNacimiento" class="form-label">Fecha Nacimiento:</label>
                    <input type="date" class="form-control" name="fechaNacimiento" value="<?=  $corredor->fechaNacimiento ?>" required>
                </div>

                <!-- campo sexo -->
                <div class="mb-3">
                    <label for="sexo" class="form-label">Sexo:</label>
                    <select class="form-select" name="sexo" required>
                        <option value="H" <?= ($corredor->sexo == 'H') ? 'selected' : '' ?>>Hombre</option>
                        <option value="M" <?= ($corredor->sexo == 'M') ? 'selected' : '' ?>>Mujer</option>
                        <option value=" " <?= ($corredor->sexo == ' ') ? 'selected' : '' ?>>No especificado</option>
                    </select>
                </div>

                <!-- campo email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" value="<?=  $corredor->email ?>" required>
                </div>

                <!-- campo dni -->
                <div class="mb-3">
                    <label for="dni" class="form-label">DNI:</label>
                    <input type="text" class="form-control" name="dni" value="<?=  $corredor->dni ?>" required>
                </div>

                <!-- Select Dinámico Categorías -->
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoría:</label>
                    <select class="form-select" name="id_categoria" required>
                        <option selected disabled>Seleccione Categoría</option>
                        <!-- mostrar lista categorías -->
                        <?php foreach ($categorias as $categoria): ?>
                            <option value="<?= $categoria['id'] ?>"
                                <?= ($categoria['id'] == $corredor->id_categoria) ? 'selected' : '' ?>>
                                <?= $categoria['nombre'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Select Dinámico Clubs -->
                <div class="mb-3">
                    <label for="club" class="form-label">Club:</label>
                    <select class="form-select" name="id_club" required>
                        <option selected disabled>Seleccione Club</option>
                        <!-- mostrar lista clubs -->
                        <?php foreach ($clubs as $club): ?>
                            <option value="<?= $club['id'] ?>"
                                <?= ($club['id'] == $corredor->id_club) ? 'selected' : '' ?>>
                                <?= $club['nombre'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- botones de acción -->
                <a class="btn btn-secondary" href="index.php" role="button"  
                onclick="return confirm('Confirmar cancelación')">Cancelar</a>
                <button type="reset" class="btn btn-secondary"  onclick="return confirm('Confirmar reseteo')">Limpiar</button>
                <button type="submit" class="btn btn-primary">Actualizar Corredor</button>
            </form>

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