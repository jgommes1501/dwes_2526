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

                <!-- Valor velocidad Inicial -->
                <div class="mb-3">
                    <label class="form-label" for="vo">Valor Inicial</label> 
                    <input type="number" step="1" name="vo" class="form-control" placeholder="0" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Velocidad en m/s</small>
                </div>

                <!-- Valor 2 -->
                <div class="mb-3">
                    <label class="form-label" for="angulo">Ángulo de Lanzamiento</label>
                    <input type="number" step="1" name="angulo" class="form-control" placeholder="0" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Ángulo en grados</small>
                </div>

                <!-- botones de acción -->
                 <div class="btn-group" role="group">
                    <button type="reset" class="btn btn-secondary">Borrar</button>
                    <button type="submit" class="btn btn-warning" formaction="calculos.php">Calcular Lanzamiento</button>       
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