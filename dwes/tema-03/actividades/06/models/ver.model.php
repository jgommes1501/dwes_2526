<?php

// Obtener el ID del libro desde GET
$id = $_GET['id'] ?? null;

// Cargar todos los libros
$libros = get_tabla_libros();

// Buscar el índice del libro con ese ID
$indice = get_indice_libro_por_id($libros, $id);

// Obtener el libro seleccionado
$libro = $libros[$indice];
