<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1. Conversiones de datos en expresiones.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
</head>
<body>



     <table>
        <tr>
            <th>Expresión</th>
            <th>Resultado</th>
            <th>Tipo de Dato</th>
        </tr>

        <?php foreach ($resultados as $expresion => $valor): ?>
        <tr>
            <td><?= htmlspecialchars($expresion) ?></td>
            <td><?= htmlspecialchars($valor) ?></td>
            <td><?= htmlspecialchars($tipos[$expresion]) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>



</body>
</html>

