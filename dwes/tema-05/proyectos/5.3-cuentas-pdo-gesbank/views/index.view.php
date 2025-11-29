<!DOCTYPE html>
<html lang="es">

<head>

    <!-- Cargar bootstrap -->
    <?php require_once 'views/layouts/head.layout.php'; ?>
    <title> Proyecto 5.3 - Panel Control de Cuentas - GESBANK</title>

</head>

<body>

    <!-- capa principal -->
    <div class="container mt-3">

        <!-- cabecera del documento -->
        <?php require_once 'views/partials/header.partial.php'; ?>

        <!-- mensajes de error -->
        <?php require_once 'views/partials/error.partial.php'; ?>

        <!-- mensajes de notificación -->
        <?php require_once 'views/partials/notify.partial.php'; ?>

        <!-- Navegador o menu cuentas -->
        <?php require_once 'views/partials/menu.partial.php'; ?>

        <!-- contenido principal -->
        <main>

            <div class="table-responsive">
                <table class="table table-hover">
                    <!-- cabecera tabla cuentas -->
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Num Cuenta</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Fecha Alta</th>
                            <th scope="col">Fecha Últ. Mov</th>
                            <th scope="col" class="text-end">Num Movtos</th>
                            <th scope="col" class="text-end">Saldo</th>
                            <th scope="col">Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <!-- $cuentas es un objeto PDOStatement -->
                        <?php  while ($cuenta = $cuentas->fetch()): ?>
                            <tr class="">
                                <td><?= $cuenta->id ?></td>
                                <td><?= $cuenta->num_cuenta ?></td>
                                <td><?= $cuenta->cliente ?></td>
                                <td><?= date('d/m/Y', strtotime($cuenta->fecha_alta)) ?></td>
                                <td><?= date('d/m/Y H:i', strtotime($cuenta->fecha_ul_mov)) ?></td>
                                <td class="text-end"><?= $cuenta->num_movtos ?></td>
                                <td class="text-end"><?= number_format($cuenta->saldo, 2, ',', '.') ?> €</td>

                                <!-- botones de acción -->
                                <td>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <!-- boton eliminar -->
                                        <a href="delete.php?id=<?= $cuenta->id ?>" class="btn btn-danger btn-sm" title="Eliminar"
                                            onclick="return confirm('Confimar elimación de la cuenta')">
                                            <i class="bi bi-trash3"></i>
                                        </a>
                                        <!-- boton editar -->
                                        <a href="edit.php?id=<?= $cuenta->id ?>" class="btn btn-warning btn-sm" title="Editar">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <!-- boton ver -->
                                        <a href="show.php?id=<?= $cuenta->id ?>" class="btn btn-primary btn-sm" title="Ver">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                    </div>
                                </td>


                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="8">Total Cuentas: <?= $cuentas->rowCount() ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </main>

       
    </div>
    <br><br><br>
    <!-- pie de página -->
    <?php require_once 'views/partials/footer.partial.php'; ?>
    <!-- javaScript bootstrap 5.3.8 -->
    <?php require_once 'views/layouts/js_bootstrap.layout.php'; ?>
</body>

</html>
