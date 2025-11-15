<?php

/**
 * Modelo: edit.model.php
 * 
 * Descripción: Carga los datos del alumno a editar (SIN ENCAPSULAMIENTO)
 * 
 * Parámetros GET:
 *  - indice: índice del alumno en la tabla
 */

// Cargar las clases
require_once 'class/alumno.class.php';
require_once 'class/tabla_alumnos.class.php';

// Obtener el índice del alumno
$indice = $_GET['indice'];

// Crear un objeto de la clase Tabla_alumnos
$obj_tabla_alumnos = new Tabla_alumnos();

// Cargar los alumnos
$obj_tabla_alumnos->getAlumnos();

// Obtener el alumno a editar
$alumno = $obj_tabla_alumnos->read($indice);

// Obtener los arrays de cursos y asignaturas
$cursos = $obj_tabla_alumnos->getCursos();
$asignaturas = $obj_tabla_alumnos->getAsignaturas();
