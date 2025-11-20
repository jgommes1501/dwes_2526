<?php

    /*
        ejemplo 03: conexion base de datos PDO
    */

    //Variables de conexion, esas variables normalmente se definen
    //como conostantes, pues los valores no van a variar en la ejecución

    $ip = '127.0.0.1:3306';
    $server = 'localhost';
    $user = 'root';
    $password = null;
    $bd = 'fp';

    try {
        //establecer la conexión
        $pdo = new PDO("mysql:host=$server;dbname=$bd", $user, $password);
        // establecer el modo de error de PDO a excepción
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //etablecemos comando sql
        $sql = "SELECT * FROM alumnos";

        //ejecutamos comando sql y devuelve el resultado
        $stmt = $pdo->query($sql);

        //mostrar los resultados
        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<p>";
            echo "ID: " . $fila['id'] . "<br>";
            echo "Nombre: " . $fila['nombre'] . "<br>";
            echo "Apellidos: " . $fila['apellidos'] . "<br>";
            echo "</p>";
        }
    } catch (PDOException $e) {
        die("Conexión fallida: " . $e->getMessage());
    }

    // cerrar la conexión
    $pdo = null;

?>