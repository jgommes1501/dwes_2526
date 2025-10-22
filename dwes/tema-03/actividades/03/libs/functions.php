<?php

/*
    Actividad 3.3
    Archivo: functions.php
    Descripción: Funciones reutilizables para la gestión de libros.
    Autor: Jaime Gómez Mesa
    Fecha: 22/10/2025
*/

//función para validar datos del libro
function get_tabla_libros() {
    $tabla = [
    [
        'id' => 1,
        'titulo' => 'Cien años de soledad',
        'autor' => 'Gabriel García Márquez',
        'genero' => 'Realismo mágico',
        'precio' => 19.99,
        'editorial' => 'Editorial Sudamericana'
    ], 
    [
        'id' => 2,
        'titulo' => 'La sombra del viento',
        'autor' => 'Carlos Ruiz Zafón',
        'genero' => 'Misterio',
        'precio' => 14.50,
        'editorial' => 'Planeta'
    ], 
    [
        'id' => 3,
        'titulo' => '1984',
        'autor' => 'George Orwell',
        'genero' => 'Distopía',
        'precio' => 15.75,
        'editorial' => 'Secker & Warburg'
    ],
    [
        'id' => 4,
        'titulo' => 'El nombre de la rosa',
        'autor' => 'Umberto Eco',
        'genero' => 'Misterio histórico',
        'precio' => 21.90,
        'editorial' => 'Bompiani'
    ]
];
    return $tabla;
}

?>