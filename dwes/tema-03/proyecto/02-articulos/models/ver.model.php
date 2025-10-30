<?php
// Obtener el ID del artículo desde GET
$id = $_GET['id'] ?? null;

// Cargar todos los artículos
$articulos = get_articulos();
// Buscar el índice del artículo con ese ID
$indice = get_indice_articulo_por_id($articulos, $id);

// Obtener el artículo seleccionado (si existe)
$articulo = ($indice !== null) ? $articulos[$indice] : null;