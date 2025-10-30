<?php
/*
    Proyecto: 3.2 - Proyecto CRUD Tabla Artículos
    Archivo: search.model.php
    Descripción: Controlador para buscar artículos en la tabla
    Autor: Jaime Gómez Mesa
    Fecha: 29/10/2025
*/

// Obtener la expresión de búsqueda desde la URL
$expresion = $_GET['expresion'] ?? '';

// Obtener el array de artículos
$articulos = get_articulos();

// Filtrar el array de artículos según la expresión de búsqueda
if ($expresion) {
    $aux = [];

    foreach ($articulos as $articulo) {
        // Recorremos cada campo del artículo y buscamos la expresión
        foreach ($articulo as $campo) {
            // Comprobamos si la expresión está contenida en el campo
            if (stripos($campo, $expresion) !== false) {
                $aux[] = $articulo;
                break; // Si encontramos coincidencia en un campo, pasamos al siguiente artículo
            }
        }
    }

    // Asignamos el array filtrado a la variable artículos
    $articulos = $aux;
}
