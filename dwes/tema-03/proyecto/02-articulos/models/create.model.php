<?php

/*
    Actividad 3.2
    Archivo: create.model.php
    Descripción: Añade un nuevo artículo al array $articulos.
    Autor: Jaime Gómez Mesa
    Fecha: 29/10/2025
*/

// Cargar el array actual de artículos
$articulos = get_categorias();

// Comprobar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Recoger los datos del formulario
    $descripcion = $_POST['descripcion'] ?? '';
    $modelo      = $_POST['modelo'] ?? '';
    $categoria   = $_POST['categoria'] ?? '';
    $stock       = $_POST['stock'] ?? 0;
    $precio      = $_POST['precio'] ?? 0.00;

    // Calcular nuevo ID de artículo (último + 1)
    $ultimo_id = end($articulos)['id'];
    $nuevo_id  = $ultimo_id + 1;

    // Crear el nuevo artículo
    $nuevo_articulo = [
        'id'          => $nuevo_id,
        'descripcion' => $descripcion,
        'modelo'      => $modelo,
        'categoria'   => $categoria,
        'stock'      => $stock,
        'precio'      => (float)$precio
    ];
}
    // Añadirlo al array (simulación de inserción en “base de datos”)
    $articulos[] = $nuevo_articulo;
