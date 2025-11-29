<?php

/*
    modelo: search.model.php
    descripción: Modelo para filtrar la tabla cuentas a partir de un prompt de búsqueda

    Parámetros GET:

    - $prompt : expresión de búsqueda

*/

// obtener criterio ordenación
$prompt = $_GET['prompt'] ?? null;

// Conectar base de datos
$gesbank = new class_tabla_cuentas();

// Ejecutar filtro
$cuentas = $gesbank->filter($prompt);

// notificación 
$notify = "Mostrando resultados para la búsqueda: '$prompt'";

?>
