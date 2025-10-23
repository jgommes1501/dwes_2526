<?php

/*
    Actividad 3.3
    Archivo: create.model.php
    Descripción: Añadir nuevo libro al array de libros.
    Autor: Jaime Gómez Mesa
    Fecha: 22/10/2025
    Metodo Post:
        id
        titulo
        autor
        genero
        editorial
        precio
*/

//Obtenemos los datos del formulario
//$id = $_POST['id'];
$id = $_POST['id'] ?? null;
$titulo = $_POST['titulo'] ?? null;
$autor = $_POST['autor'] ?? null;
$genero = $_POST['genero'] ?? null;
$editorial = $_POST['editorial'] ?? null;
$precio = $_POST['precio'] ?? null;

// Crar el array asociatuvo del nuevo libro
$nuevoLibro = [
    'id' => $id,
    'titulo' => $titulo,
    'autor' => $autor,
    'genero' => $genero,
    'editorial' => $editorial,
    'precio' => (float)$precio
];

// cargo el array de libros existentes
$libros = get_tabla_libros();

// Añadir el nuevo libro al array de libros
$libros[] = $nuevoLibro;

?>