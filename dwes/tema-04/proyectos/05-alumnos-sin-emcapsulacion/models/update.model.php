<?php

/**
 * Modelo: update.model.php
 * 
 * Descripción: Actualiza los datos de un alumno (SIN ENCAPSULAMIENTO)
 * 
 * Parámetros GET:
 *  - indice: índice del alumno en la tabla
 */

// Obtener el índice del alumno
$indice = $_GET['indice'];

// Cargar los detalles del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$f_nacimiento = $_POST['f_nacimiento'];
$curso = $_POST['curso'];
$asignaturas = $_POST['asignaturas'] ?? [];

// Crear un objeto de la clase Tabla_alumnos
$obj_tabla_alumnos = new Tabla_alumnos();

// Cargar los alumnos
$obj_tabla_alumnos->getAlumnos();

// Obtener el alumno original para conservar el ID (acceso directo)
$alumno_original = $obj_tabla_alumnos->read($indice);

// Crear el alumno actualizado con el mismo ID
$alumno = new Alumno(
    $alumno_original->id,
    $nombre,
    $apellidos,
    $email,
    $f_nacimiento,
    $curso,
    $asignaturas
);

// Actualizar el alumno en la tabla
$obj_tabla_alumnos->update($alumno, $indice);

// Obtener la tabla actualizada (acceso directo)
$alumnos = $obj_tabla_alumnos->tabla;

// Obtener los arrays de cursos y asignaturas
$cursos = $obj_tabla_alumnos->getCursos();
$asignaturas = $obj_tabla_alumnos->getAsignaturas();
