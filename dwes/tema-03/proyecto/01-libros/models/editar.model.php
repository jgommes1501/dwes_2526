<?php

/*
    Actividad 3.5
    Archivo: editar.model.php
    Descripción: Modelo para la edición de registros en la base de datos.
    Autor: Jaime Gómez Mesa
    Fecha: 23/10/2025

    Método GET:
        - ID del registro a editar.
        - Ejemplo: editar.model.php?id=5

*/

//Cargo el id del libro que voy a editar
$id = $_GET['id'] ?? null;

//Carga la array de libros
$libros = get_tabla_libros();

//Obtener el indice del libro a editar
$indice_libro = get_indice_libro_por_id($libros, $id);

//Obtener los datos del libro a editar
if ($indice_libro !== null) {
    $libro = $libros[$indice_libro];
} else {
    //Si no se encuentra el libro, redirigir o mostrar un error
    echo "Libro no encontrado.";
    exit();
}
?>