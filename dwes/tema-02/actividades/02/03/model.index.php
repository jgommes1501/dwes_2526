<?php

/*
    Actividad 2.2
    Autor: Jaime Gómez Mesa
    Fecha: 2025/10/04
    Descripción: Ejercicio 3 ",
*/

$valor1 = 0;
$valor2 = "";
$valor3 = false;
$valor4 = null;
$valor6 = null;


$valores = [
    "entero 0" => $valor1,
    "cadena vacía" => $valor2,
    "booleano false" => $valor3,
    "valor null" => $valor4,
    "variable no declarada" => @$valor5,
    "valor null explícito" => $valor6
];

// Evaluamos con isset()
$resultados = [];
foreach ($valores as $nombre => $valor) {
    $resultados[$nombre] = isset($valor) ? "Verdadero" : "Falso";
}
?>


