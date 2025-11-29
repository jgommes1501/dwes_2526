<?php

/*
    modelo:  order.model.php
    descripción: Modelo para ordenar la tabla de corredores por diferentes campos.

    Ordernar por:
    - 1 : ordena por id ascendente
    - 2: ordena por nombre ascendente
    - 3: ordena por apellidos ascendente
    - 4: ordena por ciudad ascendente
    - 5: ordena por email ascendente
    - 6: ordena por edad ascendente
    - 7: ordena por categoría ascendente
    - 8: ordena por club ascendente

    Parámetros:
    - $criterio : nº del campo por el que se ordena

*/
$t_orden = [ 
    1 => 'id ASC',
    2 => 'nombre ASC',
    3 => 'apellidos ASC',
    4 => 'ciudad ASC',
    5 => 'email ASC',
    6 => 'edad ASC',
    7 => 'categoria ASC',
    8 => 'club ASC'
];

// obtener criterio ordenación
$criterio = $_GET['criterio'] ?? null;

// Conectar base de datos
$conexion = new class_tabla_corredores();

// Ejecuto método order_by para obtener corredores ordenados
$corredores = $conexion->order_by($criterio);

$notify = "Corredores ordenados por el criterio $t_orden[$criterio]";


?>