<?php

/**
 * Modelo: delete.model.php
 * 
 * Descripción: Elimina un alumno de la tabla (SIN ENCAPSULAMIENTO)
 * 
 * Parámetros GET:
 *  - indice: índice del alumno en la tabla
 */

// Obtener el índice del alumno
$indice = $_GET['indice'];

// Crear un objeto de la clase Tabla_alumnos
$obj_tabla_alumnos = new Tabla_alumnos();

// Cargar los alumnos
$obj_tabla_alumnos->getAlumnos();

// Eliminar el alumno
$obj_tabla_alumnos->delete($indice);

// Obtener la tabla actualizada (acceso directo)
$alumnos = $obj_tabla_alumnos->tabla;

// Obtener los arrays de cursos y asignaturas
$cursos = $obj_tabla_alumnos->getCursos();
$asignaturas = $obj_tabla_alumnos->getAsignaturas();
