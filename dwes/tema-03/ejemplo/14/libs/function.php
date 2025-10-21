<?php

/*
    Ejemplo 3.14
    Archivo: function.php
    Descripción: Libreria con funciones reutilizables
    Autor: Jaime Gómez Mesa
    Fecha: 21/10/2025
*/


function suma(int $a, int $b) {
    return $a + $b;
}

function resta(int $a, int $b) {
    return $a - $b;
}

function division(int $a, int $b) {
    if ($b == 0) {
    return "No se puede dividir por 0";
}
return $a / $b;
}



?>