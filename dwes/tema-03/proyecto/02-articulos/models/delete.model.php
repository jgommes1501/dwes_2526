<?php

/*
    Proyecto: 3.2 - Proyecto CRUD Tabla Artículos
    Archivo: delete.model.php
    Descripción: Elimina un artículo del array $articulos según su ID.
    Autor: Jaime Gómez Mesa
    Fecha: 29/10/2025
*/

// Obtener el id del artículo a eliminar desde la URL
$id_eliminar = $_GET['id'] ?? null;

// Cargar el array de artículos
$articulos = get_categorias();

// Obtener el índice del artículo a eliminar por su ID
// Eliminar el artículo del array si se encuentra
$indice = get_indice_articulo_por_id($articulos, $id_eliminar);
if ($indice !== null) {
    unset($articulos[$indice]);
    // Reindexar el array para mantener índices consecutivos
    $articulos = array_values($articulos);
}

?>
