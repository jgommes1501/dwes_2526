<?php

/*
    modelo: new.model.php
    descripción: modelo para insertar un nuevo corredor   
*/

// Conexión a la base de datos
$conexion = new class_tabla_corredores();

// Obtener array asociativo con las categorias
$categorias = $conexion->getCategorias();

// Obtener array asociativo con los clubs
$clubs = $conexion->getClubs();

?>