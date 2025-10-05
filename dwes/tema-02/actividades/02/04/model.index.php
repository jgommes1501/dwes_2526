<?php

/*
    Actividad 2.2
    Autor: Jaime Gómez Mesa
    Fecha: 2025/10/04
    Descripción: Ejercicio 4 ",
*/

$valor1 = 0;
$valor2 = "";
$valor3 = false;
$valor4 = "PHP";
$valor5 = 10;
$valor6 = [1, 2];

$valores = [
    "entero 0" => $valor1,
    "cadena vacía" => $valor2,
    "booleano false" => $valor3,
    "cadena 'PHP'" => $valor4,
    "entero 10" => $valor5,
    "array con valores" => $valor6
];

// Evaluamos con empty()
$resultados = [];
foreach ($valores as $nombre => $valor) {
    $resultados[$nombre] = empty($valor) ? "Verdadero" : "Falso";
}
?>


