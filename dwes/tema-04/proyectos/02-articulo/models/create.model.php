<?php 

/*
    Autor: Jaime Gómez Mesa
    Fichero: new.model.php
    Descripción: obtiene los detalles del formulario y añade nuevo artículo.
    Fecha: 12/11/2025
*/

// Cargar los detalles del formulario
$id = $_POST['id'] ?? null;
$descripcion = $_POST['descripcion'] ?? null;
$modelo = $_POST['modelo'] ?? null;
$marca = $_POST['marca'] ?? null;
$categorias = $_POST['categorias'] ?? [];
$unidades = $_POST['unidades'] ?? null;
$precio = $_POST['precio'] ?? null;

// Validación
//Creo un obejto de la clase Artículo a partir de los datos del formulario
$articulo = new Class_articulo(
    $id,
    $descripcion,
    $modelo,
    $marca,
    $categorias,
    $precio,
    $unidades
);

//Crear un objeto o instancia de la tabla de artículos
$tabla_articulos = new Class_tabla_articulos();

//Cargar los datos
$tabla_articulos->get_datos();

//Añade nuevo objeto a la tabla
$tabla_articulos->create($articulo);

//Obtener el array de artículos
$articulos = $tabla_articulos->getArticulos();


// Obtener array de marcas  
$marcas = Class_tabla_articulos::getMarcas();

// Obtener array de categorías
$categorias = Class_tabla_articulos::getCategorias();