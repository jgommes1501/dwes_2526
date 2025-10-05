<?php

/*
    Actividad 2.2
    Autor: Jaime Gómez Mesa
    Fecha: 2025/10/04
    Descripción: Ejercicio 1 ",
*/

$entero = 10;
$cadenaNumero = "5hola";
$cadenaTexto = " manzanas";
$flotante = 2.75;
$booleano = true;

// Expresiones
$resultados = [
    "entero * cadenaNumero" => $entero * $cadenaNumero,
    "entero + cadenaNumero" => $entero + $cadenaNumero,
    "entero + flotante" => $entero + $flotante,
    "entero . cadenaTexto" => $entero . $cadenaTexto,
    "entero + booleano" => $entero + $booleano
];

// Obtenemos los tipos de datos resultantes
$tipos = [];
foreach ($resultados as $expresion => $valor) {
    $tipos[$expresion] = gettype($valor);
}
?>


