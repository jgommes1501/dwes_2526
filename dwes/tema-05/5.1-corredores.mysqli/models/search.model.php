<?php

/*
    modelo:  search.model.php
    descripción: Modelo para filtrar la tabla corredores a partir de un prompt de búsqueda

    Parámetros GET:

    - $prompt : expresión de búsqueda

*/

// obtener criterio ordenación
$prompt = $_GET['prompt'] ?? null;

// Conectar base de datos
$conexion = new class_tabla_corredores();

// Ejecuto método filter para obtener corredores filtrados
$corredores = $conexion->filter($prompt);

// notificación 
$notify = "Mostrando resultados para la búsqueda: '$prompt'";


?>