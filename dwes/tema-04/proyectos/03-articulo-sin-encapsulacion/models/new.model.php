<?php 

/*
    Autor: Jaime Gómez Mesa
    Fichero: new.model.php
    Descripción: genera los datos necesarios para el formulario de creación de un nuevo artículo.
    Fecha: 12/11/2025

    Datos necesarios:
    - array $categorias: categorías disponibles 
    - array $marcas: marcas disponibles
*/

// incluir el array de marcas
$marcas = Class_tabla_articulos::getMarcas();

// incluir el array de categorías
$categorias = Class_tabla_articulos::getCategorias();