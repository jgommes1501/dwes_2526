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

    //Opciones de conexión (opcional)
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];  

    //Conectamos con la base de datos fp
    $pdo = new PDO($dsn, $user, $password, $options);

    echo "Conexión exitosa a la base de datos";
    
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}