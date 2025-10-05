<?php

/*
    Actividad 2.1  
    Autor: Jaime Gómez Mesa
    Fecha: 2025/10/25
    Descripción:  Ejercicio 5",
*/

// Función que devuelve la información de PHP
function mostrarInfoPHP() {

    ob_start();
    phpinfo();
    $info = ob_get_clean(); // Guarda la salida en una variable y limpia el buffer
    return $info;
}

// Guardamos el contenido en una variable que usará la vista
$informacionPHP = mostrarInfoPHP();
?>


