<?php

/*
    Actividad 3.8
    Archivo: search.model.php
    Descripción: Modelo para buscar libros según el término de búsqueda.
    Autor: Jaime Gómez Mesa
    Fecha: 29/10/2025

    Metodo: GET o URL
    Parámetros:
        - expresion: expresión de búsqueda para filtrar los libros
        - ejemplo: search.php?expresion=harry
        - salida: lista de libros que coinciden con el término de búsqueda
*/

// Obtener la expresión de búsqueda desde la URL
$expresion = $_GET['expresion'] ?? '';

//Obtener el array de libros
$libros = get_tabla_libros();
// Filtro el array de libros según la expresión de búsqueda
if ($expresion) {

//Creo un array para almacenar los libros que coinciden con la búsqueda
    $aux = [];

    foreach ($libros as $libro) {
    if (array_search($expresion, $libro) !== false) {
        //Si el libro contiene la expresión de búsqueda, lo añado al array auxiliar
        $aux[] = $libro;
    }
}
    //Asigno el array filtrado a la variable libros
    $libros = $aux;
}

