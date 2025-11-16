<?php

/**
 * Modelo: new.model.php
 * 
 * Descripción: Genera los datos necesarios para el formulario de nuevo alumno (SIN ENCAPSULAMIENTO)
 */

// Crear objeto de la clase Tabla_alumnos
$obj_tabla_alumnos = new Tabla_alumnos();

// Obtener los arrays de cursos y asignaturas
$cursos = $obj_tabla_alumnos->getCursos();
$asignaturas = $obj_tabla_alumnos->getAsignaturas();
