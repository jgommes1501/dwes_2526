<?php 

/*
    Autor: Jaime Gómez Mesa
    Fichero: delete.model.php
    Descripción: elimina un articulo de la tabla a partir de su id
    Fecha: 13/11/2025

    Parametros Get:
        - ID : artículo a eliminar
*/

//Obetengo id del artículo
$id = $_GET['id'] ?? null;

// Obtener el array de objetos de la clase artículos

// Creo un objeto de la clase tabla_artículo
$tabla_articulos = new Class_tabla_articulos();

//Cargar los datos
$tabla_articulos->get_datos();

// Obtener los detalles del artículo mediante un objeto de la clase artículo

//Obtener el índice del array en el que se encuentra el objeto artículo
$indice = $tabla_articulos->get_indice_from_id($id);

//Eliminar el artículo del array mediante el método delete
$tabla_articulos->delete($indice);

//Obtener la tabla artículos
$articulos = $tabla_articulos->getArticulos();

//Obtener las categorías disponibles
$categorias = Class_tabla_articulos::getCategorias();

//Obtener las marcas disponibles
$marcas = Class_tabla_articulos::getMarcas();


?>