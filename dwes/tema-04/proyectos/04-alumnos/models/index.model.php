<?php

/**
 * Modelo: index.model.php
 * 
 * Carga la tabla de alumnos
 */

// Cargar las clases
require_once 'class/alumno.class.php';
require_once 'class/tabla_alumnos.class.php';

// Crear un objeto de la clase Tabla_alumnos
$obj_tabla_alumnos = new Tabla_alumnos();

// Cargar los alumnos
$obj_tabla_alumnos->getAlumnos();

// Obtener la tabla de alumnos
$alumnos = $obj_tabla_alumnos->getTabla();

// Obtener los arrays de cursos y asignaturas
$cursos = $obj_tabla_alumnos->getCursos();
$asignaturas = $obj_tabla_alumnos->getAsignaturas();
  