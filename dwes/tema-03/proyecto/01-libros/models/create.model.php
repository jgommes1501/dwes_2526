<?php

/*
    Actividad 3.5
    Archivo: actualizar.model.php
    Descripción: Actualiza los datos de un libro del array $libros según su ID.
    Autor: Jaime Gómez Mesa
    Fecha: 27/10/2025
*/

// Obtener el id del libro a actualizar desde la URL
$id_actualizar = $_GET['id'] ?? null;

// Cargar el array de libros
$libros = get_tabla_libros();

// Obtener el índice del libro a actualizar por su ID
$indice = get_indice_libro_por_id($libros, $id_actualizar);

if ($indice !== null && $_SERVER['REQUEST_METHOD'] === 'POST') {
    // Suponiendo que los nuevos datos vienen de un formulario via POST
    $titulo = $_POST['titulo'] ?? $libros[$indice]['titulo'];
    $autor  = $_POST['autor']  ?? $libros[$indice]['autor'];
    $anio   = $_POST['anio']   ?? $libros[$indice]['anio'];

    // Actualizar los datos en el array
    $libros[$indice]['titulo'] = $titulo;
    $libros[$indice]['autor']  = $autor;
    $libros[$indice]['anio']   = $anio;

    // Aquí podrías guardar $libros en la base de datos o archivo si aplica
}

?>
