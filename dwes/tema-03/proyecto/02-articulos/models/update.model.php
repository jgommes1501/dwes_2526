<?php
/*
    Actividad 3.3
    Archivo: update.model.php
    Descripción: Actualiza un artículo en el array.
    Autor: Jaime Gómez Mesa
    Fecha: 29/10/2025
*/

// Cargar la tabla actual de artículos
$articulos = get_categorias();

// Obtener el ID del artículo desde POST
$id = $_POST['id'] ?? null;

// Buscar el índice del artículo por su ID
$indice = get_indice_articulo_por_id($articulos, $id);

// Actualizar los datos del artículo en memoria
$articulos[$indice] = [
    'id'          => $id,
    'descripcion' => $_POST['descripcion'] ?? $articulos[$indice]['descripcion'],
    'modelo'      => $_POST['modelo'] ?? $articulos[$indice]['modelo'],
    'categoria'   => $_POST['categoria'] ?? $articulos[$indice]['categoria'],
    'stock'       => $_POST['stock'] ?? $articulos[$indice]['stock'],
    'precio'      => $_POST['precio'] ?? $articulos[$indice]['precio'],
];
?>
