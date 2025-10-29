<?php
// Archivo: order.model.php
/*
    Actividad 3.7
    Archivo: order.model.php
    Descripción: Modelo para ordenar los libros según el criterio seleccionado.
    Autor: Jaime Gómez Mesa
    Fecha: 23/10/2025
*/

// Obtener el criterio de ordenación desde GET
$orden = $_GET['criterio'] ?? 'id'; 

// Crear dollar libros
$libros = get_tabla_libros();

$criterio = array_column($libros, $orden);
array_multisort($criterio, SORT_ASC, $libros);