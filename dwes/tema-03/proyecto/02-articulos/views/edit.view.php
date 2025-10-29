<?php
// Cargar datos del artículo a editar
$id = $_GET['id'] ?? null;
$articulos = get_categorias();
$indice = get_indice_articulo_por_id($articulos, $id);
$articulo = $indice !== null ? $articulos[$indice] : null;

if (!$articulo) {
    echo "Artículo no encontrado.";
    exit;
}

// Obtener lista de categorías para el desplegable
$categorias = get_categorias();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Cargar Bootstrap -->
    <?php include 'views/layouts/head.layout.php'; ?>
    <title>Editar Artículo</title>
</head>

<body>
    <div class="container mt-3">
        <!-- Cabecera -->
        <?php include 'views/partials/header.partial.php';?>

        <!-- Contenido principal -->
        <main>
            <legend>Formulario Editar Artículo</legend>

            <!-- Formulario actualizado -->
            <form action="update.php?id=<?= $articulo['id'] ?>" method="post">
                <div class="mb-3">
                    <label for="id" class="form-label">ID:</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?= $articulo['id'] ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?= $articulo['descripcion'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo:</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" value="<?= $articulo['modelo'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoría:</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" value="<?= $articulo['categoria'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label">Stock:</label>
                    <input type="number" class="form-control" id="stock" name="stock" value="<?= $articulo['stock'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label">Precio:</label>
                    <input type="number" class="form-control" id="precio" name="precio" value="<?= $articulo['precio'] ?>" step="0.01" required>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar Artículo</button>
            </form>
        </main>

        <!-- Pie de página -->
        <?php include 'views/partials/footer.partial.php'; ?>
    </div>

</body>

</html>