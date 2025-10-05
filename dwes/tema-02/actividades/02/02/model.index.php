<?php

/*
    Actividad 2.2
    Autor: Jaime Gómez Mesa
    Fecha: 2025/10/04
    Descripción: Ejercicio 2 ",
*/

$valor1 = null;
$valor2 = NULL;
$valor3 = @$variableNoDefinida; 
$valor4 = "";
$valor5 = 0; 
$valor6 = false;

$valores = [
    "null"                => $valor1,
    "NULL"   => $valor2,
    "variable no definida" => $valor3,
    "cadena vacía"        => $valor4,
    "entero 0"            => $valor5,
    "booleano false"      => $valor6
];

// Evaluamos con is_null()
$resultados = [];
foreach ($valores as $nombre => $valor) {
    $resultados[$nombre] = is_null($valor) ? "Verdadero" : "Falso";
}
?>


