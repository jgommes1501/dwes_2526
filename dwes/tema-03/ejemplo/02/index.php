<?php

/*
    ejemplo: 3.2 if ... elseif 
    Autor: Jaime Gómez Mesa
    Fecha: 2025/10/08
    Descripción: Ejemplo if ... elseif ",
*/

$nota= 10;

if ($nota < 5){
    echo "Suspenso";
} elseif ($nota < 6) {
    echo "Suficiente";
    } elseif ($nota < 7) {
    echo "Suficiente";
    } elseif ($nota < 9) {
    echo "Notable";
    } else {
        echo "Sobresaliente";
    }

?>