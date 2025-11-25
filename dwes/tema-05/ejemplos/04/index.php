<?php
/*
    ejemplo: index.php
    descripción: Uso conexión a Base de Datos con PDO
*/

    $server = 'localhost';
    $user = 'root';
    $password = null;
    $bd = 'fp';
try {
    $dsn = "mysql:host=$server;dbname=$bd;charset=utf8mb4";

    //Crear un objeto de la clase PDO
    //Conectamos con la base de datos fp
    $pdo = new PDO($dsn, $user, $password);

    //Configurar el modo de error de PDO a excepción
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa a la base de datos";
    
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}