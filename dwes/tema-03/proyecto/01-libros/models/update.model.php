<?php
/*
    Actividad 3.5
    Archivo: update.model.php
    Descripción: Actualiza un libro en el array.
    Autor: Jaime Gómez Mesa
    Fecha: 26/10/2025
*/

// Cargar la tabla actual de libros
$libros = get_tabla_libros();

// Obtener el ID del libro desde POST
$id = $_POST['id'] ?? null;

// Buscar el índice del libro por su ID
$indice = get_indice_libro_por_id($libros, $id);

// Actualizar los datos del libro en memoria
$libros[$indice] = [
    'id' => $id,
    'titulo' => $_POST['titulo'] ?? $libros[$indice]['titulo'],
    'autor' => $_POST['autor'] ?? $libros[$indice]['autor'],
    'genero' => $_POST['genero'] ?? $libros[$indice]['genero'],
    'editorial' => $_POST['editorial'] ?? $libros[$indice]['editorial'],
    'precio' => $_POST['precio'] ?? $libros[$indice]['precio'],
];
?>
