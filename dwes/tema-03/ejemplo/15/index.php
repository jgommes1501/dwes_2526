<?php

/*
    Ejemplo 3.15
    Archivo: index.php
    Descripción: Uso de una función con array cini oarámetro
    Autor: Jaime Gómez Mesa
    Fecha: 21/10/2025
*/

include 'libs/function.php';

$alumno = [
    'nombre' => 'Ana',
    'apellidos' => 'García López',
    'edad' => 21,
    'curso' => "Ingenieria Informática"
];

mostrar_alumno($alumno);
?>