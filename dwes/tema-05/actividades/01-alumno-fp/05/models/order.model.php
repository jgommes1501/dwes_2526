<?php

/*
    modelo:  order.model.php
    descripción: Modelo para ordenar los datos de alumnos para mostrarlos en la vista principal

    Ordenar por:
    - id
    - alumno
    - fecha_nacimiento
    - nacionalidad
    - dni
    - edad
    - curso

    Parametros:
    - $order_by: campo por el que se ordena
*/

//obtener crtiterio de ordenacion
$criterio = $_GET['criterio'] ?? null;

// Configuracion base de datos
$conexion = new class_tabla_alumnos();

// Ejecuto el metodo order_by para obtener los alumnos ordenados
$alumnos = $conexion->order_by($criterio);

// while ($alumno = $alumnos->fetch_assoc()) {
//     echo $alumno['id'] .  ' '.  $alumno['alumno'] . '<br>';

// }

?>