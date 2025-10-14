<?php

/*
    ejemplo: 3.3 if ... elseif 
    Autor: Jaime Gómez Mesa
    Fecha: 2025/10/08
    Descripción: Ejemplo if ... elseif ",
*/

$nota= 0;

if ($nota < 0){
    echo "ERROR";
}elseif ($nota < 5){
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