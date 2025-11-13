<?php 

/*
    Autor: Jaime Gómez Mesa
    Fichero: show.model.php
    Descripción: carga los datos necesarios para mostrar en un formulario sin edición.
    Fecha: 12/11/2025

    Parametros Get:
        - ID : artículo a editar
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

//Obtener el objeto de la clase artículo
$articulo = $tabla_articulos->get_articulo_from_indice($indice);

//Obtener las categorías disponibles
$categorias = Class_tabla_articulos::getCategorias();

//Obtener las marcas disponibles
$marcas = Class_tabla_articulos::getMarcas();


?>