<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Resultados del Circuito</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
        rel="stylesheet" 

        crossorigin="anonymous">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="card shadow-sm p-4">
      <h3 class="mb-4 text-center">Resultados del Cálculo</h3>

      <table class="table table-striped table-hover table-bordered text-center">
        <thead class="table-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Magnitud</th>
            <th scope="col">Valor</th>
            <th scope="col">Unidad</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Corriente</td>
            <td><?= $I ?></td>
            <td>A</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Potencia</td>
            <td><?= $P ?></td>
            <td>W</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Energía</td>
            <td><?= $E ?></td>
            <td>J</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Resistencia Equivalente</td>
            <td><?= $Rp ?></td>
            <td>Ω</td>
          </tr>
        </tbody>
      </table>

      <div class="text-center mt-3">
        <a href="index.php" class="btn btn-primary">
          <i class="bi bi-arrow-left-circle"></i> Volver
        </a>
      </div>

    </div>
  </div>

  <!-- Footer -->
  <footer class="footer mt-auto py-3 bg-light fixed-bottom border-top">
    <div class="container text-center">
      <span class="text-muted">© 2025 Jaime Gómez Mesa - DWES - 2º DAW - Curso 25/26</span>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
          crossorigin="anonymous"></script>
</body>
</html>
