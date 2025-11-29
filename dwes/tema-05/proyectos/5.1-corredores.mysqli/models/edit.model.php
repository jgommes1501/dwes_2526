<?php

/*
    modelo: edit.model.php
    descripción: obtiene los datos del formulario de edición de un corredor  

    Método GET:

            - id del corredor
    
*/

// Obtener id del corredor a editar
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


