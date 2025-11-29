<?php

/*
    modelo: show.model.php
    descripción: obtiene los datos de un corredor para mostrar

    Método GET:

            - id del corredor
    
*/

// Obtener id del corredor a mostrar
$corredor_id = $_GET['id'] ?? null;

// Validar id (omitir para simplificar)

// Conexión a la base de datos
$conexion = new class_tabla_corredores();

// Obtener datos del corredor
$corredor = $conexion->read($corredor_id);

// Obtener array de categorias
$categorias = $conexion->getCategorias();

// Obtener array de clubs
$clubs = $conexion->getClubs();

// Buscar nombre de categoria
$nombreCategoria = '';
foreach ($categorias as $categoria) {
    if ($categoria['id'] == $corredor->id_categoria) {
        $nombreCategoria = $categoria['nombre'];
        break;
    }
}

// Buscar nombre de club
$nombreClub = '';
foreach ($clubs as $club) {
    if ($club['id'] == $corredor->id_club) {
        $nombreClub = $club['nombre'];
        break;
    }
}

?>
