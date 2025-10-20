<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 3.1 - Tabla de multiplicar</title>
    
    <!-- CSS Bootstrap 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <!-- Iconos Bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <!-- Capa principal -->
    <div class="container mt-4">
        
        <!-- Cabecera del documento -->
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Tabla numeros del 1 al 100</span>
        </header>

        <!-- Contenido principal -->
        <main>
            <table class="table">
                <thead>
                    <th></th>
                    <?php for ($i = 1; $i <= $cabeceraHorizontal; $i++): ?>
                        <th><?php echo $i ?></th>
                    <?php endfor; ?>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i <= $cabeceraVertical; $i++):?>
                        <tr>
                            <th><?php echo $i ?></th>
                            <?php for ($x = 1; $x <= $cabeceraHorizontal; $x++): ?>
                                <td><?php echo $i * $x ?></td>
                            <?php endfor; ?>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </main>

        <!-- Pie de página -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container text-center">
                <span class="text-muted">&copy; 2025 
                    Jaime Gómez Mesa - DWES - 2º DAW - Curso 25/26
                </span>
            </div>
        </footer>
    </div>

    <!-- JavaScript Bootstrap 5.3.8 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>