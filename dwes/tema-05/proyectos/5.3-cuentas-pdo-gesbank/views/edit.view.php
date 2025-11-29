<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Cargar bootstrap -->
    <?php require_once 'views/layouts/head.layout.php'; ?>
    <title> Proyecto 5.3 - Panel Control de Cuentas - GESBANK  </title>
</head>

<body>

    <!-- capa principal -->
    <div class="container mt-3">

        <!-- cabecera del documento -->
        <?php require_once 'views/partials/header.partial.php'; ?>

        <!-- contenido principal -->
        <main>
            <!-- Formulario editar cuenta -->
            <legend>Formulario Editar Cuenta</legend>
            <form action="update.php?id=<?= $cuenta->id ?>" method="POST">

                <!-- campo número de cuenta -->
                <div class="mb-3">
                    <label for="num_cuenta" class="form-label">Número de Cuenta:</label>
                    <input type="text" class="form-control" name="num_cuenta" value="<?= $cuenta->num_cuenta ?>" maxlength="20" required>
                </div>

                <!-- Select Dinámico Clientes -->
                <div class="mb-3">
                    <label for="id_cliente" class="form-label">Cliente:</label>
                    <select class="form-select" name="id_cliente" required>
                        <option selected disabled>Seleccione Cliente</option>
                        <!-- mostrar lista clientes -->
                        <?php foreach ($clientes as $id => $nombre_completo): ?>
                            <option value="<?= $id ?>" <?= ($cuenta->id_cliente == $id) ? 'selected' : null ?>>
                                <?= $nombre_completo ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- campo fecha alta -->
                <div class="mb-3">
                    <label for="fecha_alta" class="form-label">Fecha Alta:</label>
                    <input type="date" class="form-control" name="fecha_alta" value="<?= date('Y-m-d', strtotime($cuenta->fecha_alta)) ?>" required>
                </div>

                <!-- campo fecha último movimiento -->
                <div class="mb-3">
                    <label for="fecha_ul_mov" class="form-label">Fecha Último Movimiento:</label>
                    <input type="datetime-local" class="form-control" name="fecha_ul_mov" value="<?= date('Y-m-d\TH:i', strtotime($cuenta->fecha_ul_mov)) ?>" required>
                </div>

                <!-- campo número de movimientos -->
                <div class="mb-3">
                    <label for="num_movtos" class="form-label">Número de Movimientos:</label>
                    <input type="number" class="form-control" name="num_movtos" value="<?= $cuenta->num_movtos ?>" min="0" required>
                </div>

                <!-- campo saldo -->
                <div class="mb-3">
                    <label for="saldo" class="form-label">Saldo:</label>
                    <input type="number" class="form-control" step="0.01" placeholder="0.00" name="saldo" value="<?= $cuenta->saldo ?>" required>
                </div>

                <!-- botones de acción -->
                <a class="btn btn-secondary" href="index.php" role="button"  
                onclick="return confirm('Confimar cancelación')">Cancelar</a>
                <button type="reset" class="btn btn-secondary" onclick="return confirm('Confimar reseteo del formulario')">Resetear</button>
                <button type="submit" class="btn btn-primary">Actualizar Cuenta</button>
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
