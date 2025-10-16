<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen Práctico Tema 2</title>

    <!-- Bootstrap css 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Bootstrap Icons 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  </head>
  <body>
    <!-- Capa Principal -->
    <div class="container">

        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-lightning-charge-fill"></i>       
            <span class="fs-3">Examen Práctico Tema 2</span>
        </header>

        <h1>Cálculo de circuito eléctrico en corriente continua</h1>

    </div>
<main>
<form method="post"> 
 <form action="calcular.php" method="post">

    <p>
      <label for="voltaje">Voltaje: </label>
      <input type="number" step="0.01" id="voltaje" name="voltaje" required>
    </p>

    <p>
      <label for="resistencia">Resistencia: </label>
      <input type="number" step="0.01" id="resistencia" name="resistencia" required>
    </p>

                 <div class="btn-group" role="group">
                    <button type="reset" class="btn btn-secondary">Borrar</button>
                    <button type="submit" class="btn btn-warning" formaction="calcular.php">Solución</button>
          
                 </div> 


            </form> 

</main>
    
    <!-- Pie del documento -->
    <footer class="footer mt-auto py-3 fixed-bottom bg-light">
        <div class="container">
            <span class="text-muted">© 2025
                Jaime Gómez Mesa - DWES - 2º DAW - Curso 25/26</span>
        </div>
    </footer>

     <!-- Bootstrap Javascript y popper 5.3.8 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>