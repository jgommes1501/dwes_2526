<?php

    /*
        ejemplo 01: conexión a base de datos mysqli
        descripción: funciones mysqli
    */

    //Variables de conexion, esas variables normalmente se definen
    //como conostantes, pues los valores no van a variar en la ejecución

    $ip = '127.0.0.1:3306';
    $server = 'localhost';
    $user = 'root';
    $password = null;
    $bd = 'fp';

    //establecer la conexión
    $conexion = mysqli_connect($server, $user, $password, $bd);

    //verificar la conexión
    if(!$conexion){
        die("Conexión fallida: " . mysqli_connect_error());
    }

    echo "Conexión exitosa";


    // ejecutar consulta a la tabla alumnos
    $sql = "SELECT * FROM alumnos";

    $resultado = mysqli_query($conexion, $sql);

    //mostrar los resultados
    while($fila = mysqli_fetch_assoc($resultado)){
        echo "<p>";
        echo "ID: " . $fila['id'] . "<br>";
        echo "Nombre: " . $fila['nombre'] . "<br>";
        echo "Apellidos: " . $fila['apellidos'] . "<br>";
        echo "</p>";
    }

    // cerrar la conexión
    mysqli_close($conexion);

?>