<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR DE BASE DE DATOS</title>
</head>

<body>
    <h1>ERROR DE CONEXIÓN A LA BASE DE DATOS</h1>
    <P>
        Ha habido un error al conectar con la base de datos
    </P>
    <P>
        <?= $e->getMessage(); ?>
    </P>

</body>

</html>
