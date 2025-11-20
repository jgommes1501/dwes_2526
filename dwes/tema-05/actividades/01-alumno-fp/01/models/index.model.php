<?php
/*
    clase: index.model.php
    descripción: obtiene los datos de alumnos para mostrarlo en la vista principal.
*/

//Le envio los datos de conexión
$tabla_alumnos = new class_tabla_alumnos('localhost', 'root', '', 'fp');

//Establecer la conexión
$tabla_alumnos->conectar();

$alumnos = $tabla_alumnos->get_alumnos();

//  {
//    echo $alumno['id'] . ' '. $alumno['alumno'] . '<br>';
// }

