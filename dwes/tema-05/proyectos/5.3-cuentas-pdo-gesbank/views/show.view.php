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
            <!-- Detalles de la cuenta -->
            <legend>Detalles de la Cuenta</legend>

            <table class="table">
                <tr>
                    <th>Id:</th>
                    <td><?= $cuenta->id ?></td>
                </tr>
                <tr>
                    <th>Número de Cuenta:</th>
                    <td><?= $cuenta->num_cuenta ?></td>
                </tr>
                <tr>
                    <th>Cliente:</th>
                    <td><?= $clientes[$cuenta->id_cliente] ?></td>
                </tr>
                <tr>
                    <th>Fecha Alta:</th>
                    <td><?= date('d/m/Y', strtotime($cuenta->fecha_alta)) ?></td>
                </tr>
                <tr>
                    <th>Fecha Último Movimiento:</th>
                    <td><?= date('d/m/Y H:i', strtotime($cuenta->fecha_ul_mov)) ?></td>
                </tr>
                <tr>
                    <th>Número de Movimientos:</th>
                    <td><?= $cuenta->num_movtos ?></td>
                </tr>
                <tr>
                    <th>Saldo:</th>
                    <td><?= number_format($cuenta->saldo, 2, ',', '.') ?> €</td>
                </tr>
            </table>

            <!-- botones de acción -->
            <a class="btn btn-secondary" href="index.php" role="button">Volver</a>

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
