<?php

/**
 * Modelo: index.model.php
 * 
 * Carga la tabla de alumnos (SIN ENCAPSULAMIENTO)
 */

// Crear un objeto de la clase Tabla_alumnos
$obj_tabla_alumnos = new Tabla_alumnos();

// Cargar los alumnos
$obj_tabla_alumnos->getAlumnos();

// Obtener la tabla de alumnos (acceso directo a la propiedad)
$alumnos = $obj_tabla_alumnos->tabla;

// Obtener los arrays de cursos y asignaturas
$cursos = $obj_tabla_alumnos->getCursos();
$asignaturas = $obj_tabla_alumnos->getAsignaturas();
  