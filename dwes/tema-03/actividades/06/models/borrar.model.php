<?php

/*
    Actividad 3.4
    Archivo: borrar.model.php
    Descripción: Elimina un libro del array $libro según su ID.
    Autor: Jaime Gómez Mesa
    Fecha: 23/10/2025

*/

//Obtener el id del libro a eliminar desde la URL
$id_eliminar = $_GET['id'] ?? null;

//Cargar el array de libros
$libros = get_tabla_libros();

// Obtener el índice del libro a eliminar por su ID
//Eliminar el libro del array si se encuentra
    $indice = get_indice_libro_por_id($libros, $id_eliminar);
    if ($indice !== null) {
        unset($libros[$indice]);
        // Reindexar el array para mantener índices consecutivos
        $libros = array_values($libros);
    }






?>