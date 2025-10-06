<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto 2.2 Cálculo Lanzamiento de Proyectiles</title>

    <!-- css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <!-- boodestrap Icons 1.13.1 -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>
<body>
    <!-- capa principal -->
    <div class="container mt-3">

        <!-- cabecera del documento -->
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-rocket-takeoff-fill"></i>
            <span class="fs-6">Proyecto 2.2 Cálculo Lanzamiento de Proyectiles</span>
        </header>

        <!-- contenido principal -->
         <main>
            <form method="post"> 
            <h2>Calculadora de Lanzamiento de Proyectiles</h2>
            <table>
                <tr><th>Parámetro</th><th>Valor</th></tr>
                <tr><td>Velocidad Inicial (Vo)</td><td><?= number_format($vo, 2) ?> m/s</td></tr>
                <tr><td>Ángulo (grados)</td><td><?= number_format($angulo, 2) ?>°</td></tr>
                <tr><td>Ángulo (radianes)</td><td><?= number_format($anguloRad, 4) ?></td></tr>
                <tr><td>Velocidad Horizontal (Vox)</td><td><?= number_format($vox, 2) ?> m/s</td></tr>
                <tr><td>Velocidad Vertical (Voy)</td><td><?= number_format($voy, 2) ?> m/s</td></tr>
                <tr><td>Alcance Máximo (Xmax)</td><td><?= number_format($xmax, 2) ?> m</td></tr>
                <tr><td>Altura Máxima (Ymax)</td><td><?= number_format($ymax, 2) ?> m</td></tr>
                <tr><td>Tiempo Total de Vuelo (t)</td><td><?= number_format($t, 2) ?> s</td></tr>
            </table>
            
                <!-- botones de acción -->
                 <div class="btn-group" role="group">
                    <a class="btn btn-primary" href="index.php" role="button">Volver</a>
                 </div> 

            </form> 
         </main>

         <!-- Pie de página -->

          <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2025
                    Jaime Gómez Mesa - DWES - 2 DAW - Curso 25/26</span>
            </div>
          </footer>

    <!-- javaScript Bootstrap 5.3.8 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>