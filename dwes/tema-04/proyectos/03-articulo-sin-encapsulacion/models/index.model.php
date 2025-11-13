<?php 

/*
    Autor: Jaime Gómez Mesa
    Fichero: index.model.php
    Descripción: Modelo principal del proyecto de gestión de artículos.
    Fecha: 11/11/2025
*/

# Símbolo de moneda local
setlocale(LC_MONETARY, 'es_ES.UTF-8');

//Crear una instancia de la tabla de artículos
$tabla_articulos = new Class_tabla_articulos();

//Obtiene los datos de los artículos
$tabla_articulos->get_datos();

$articulos = $tabla_articulos->obtenerArticulos();

//Obtener las categorías disponibles
$categorias = Class_tabla_articulos::getCategorias();

//Obtener las marcas disponibles
$marcas = Class_tabla_articulos::getMarcas();

?>  