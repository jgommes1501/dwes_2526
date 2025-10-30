<?php

/*
    Proyecto: 3.2 - Proyecto CRUD Tabla Artículos
    Archivo: edit.model.php
    Descripción: Modelo para la edición de artículos
    Autor: Jaime Gómez Mesa
    Fecha: 29/10/2025
*/

//Cargo el id del libro que voy a editar
$id = $_GET['id'] ?? null;

//Carga la array de artículos
$articulos = get_articulos();

//Obtener el indice del artículo a editar
$indice_articulo = get_indice_articulo_por_id($articulos, $id);

//Obtener los datos del artículo a editar
if ($indice_articulo !== null) {
    $articulo = $articulos[$indice_articulo];
} else {
    //Si no se encuentra el artículo, redirigir o mostrar un error
    echo "Artículo no encontrado.";
    exit();
}
?>