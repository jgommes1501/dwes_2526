<?php
/*
    Proyecto: 3.2 - Proyecto CRUD Tabla Artículos
    Archivo: order.model.php
    Descripción: Controlador para ordenar la tabla de artículos
    Autor: Jaime Gómez Mesa
    Fecha: 29/10/2025
*/

// Obtener el criterio de ordenación desde GET
$orden = $_GET['criterio'] ?? 'id';

// Cargar el array de artículos
$articulos = get_articulos();

// Crear un array auxiliar con la columna del criterio seleccionado
$criterio = array_column($articulos, $orden);

// Ordenar los artículos ascendentemente según el criterio
array_multisort($criterio, SORT_ASC, $articulos);
?>
