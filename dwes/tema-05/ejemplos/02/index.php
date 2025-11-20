<?php

    /*
        ejemplo 01: conexión a base de datos mysqli
        descripción: mediante la clase mysqli - forma orientada a objetos
    */

    //Variables de conexion, esas variables normalmente se definen
    //como conostantes, pues los valores no van a variar en la ejecución

    $ip = '127.0.0.1:3306';
    $server = 'localhost';
    $user = 'root';
    $password = null;
    $bd = 'fp';

    //establecer la conexión
    $conexion = new mysqli($server, $user, $password, $bd);

    //verificar la conexión
    if($conexion->connect_error){
        die("Conexión fallida: " . $conexion->connect_error);
    }

    echo "Conexión exitosa";


    // ejecutar consulta a la tabla alumnos
    $sql = "SELECT * FROM alumnos";

    //ejecuto la consulta sql y devuelvo un objeto de la clase mysqli_result
    $resultado = $conexion->query($sql);

    //mostrar los resultados
    while($fila = $resultado->fetch_assoc()){
        echo "<p>";
        echo "ID: " . $fila['id'] . "<br>";
        echo "Nombre: " . $fila['nombre'] . "<br>";
        echo "Apellidos: " . $fila['apellidos'] . "<br>";
        echo "</p>";
    }

    // cerrar la conexión
    $conexion->close();

?>