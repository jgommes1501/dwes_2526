<?php

/*
    clase: new.model.php
    descripción: obtiene los datos necesarios para crear un nuevo alumno.
*/

// Conexión a la base de datos
$conexion = new class_tabla_alumnos('localhost', 'root', '', 'fp');

//Establecer la conexión
$conexion->conectar();
//Obtener array asociativo de los cursos
$cursos = $conexion->get_cursos();