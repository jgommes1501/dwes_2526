<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3. issetl().</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
</head>
<body>
    <table>
         <tr>
            <th>Valor probado</th>
            <th>Resultado de isset()</th>
        </tr>

        <?php foreach ($resultados as $nombre => $resultado): ?>
        <tr>
            <td><?= htmlspecialchars($nombre) ?></td>
            <td><?= htmlspecialchars($resultado) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

