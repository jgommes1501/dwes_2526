<?php

/**
 * Modelo: create.model.php
 * 
 * Descripción: Obtiene los datos del formulario y crea un nuevo alumno
 */

// Cargar los detalles del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$f_nacimiento = $_POST['f_nacimiento'];
$curso = $_POST['curso'];
$asignaturas = $_POST['asignaturas'] ?? [];

// Crear un objeto de la clase Tabla_alumnos
$obj_tabla_alumnos = new Tabla_alumnos();

// Cargar los alumnos existentes
$obj_tabla_alumnos->getAlumnos();

// Generar nuevo ID (último ID + 1)
$alumnos_actuales = $obj_tabla_alumnos->getTabla();
$ultimo_id = 0;
foreach ($alumnos_actuales as $alumno) {
    if ($alumno->id > $ultimo_id) {
        $ultimo_id = $alumno->id;
    }
}
$nuevo_id = $ultimo_id + 1;

// Crear el nuevo alumno
$alumno = new Alumno(
    $nuevo_id,
    $nombre,
    $apellidos,
    $email,
    $f_nacimiento,
    $curso,
    $asignaturas
);

// Añadir el alumno a la tabla
$obj_tabla_alumnos->create($alumno);

// Obtener la tabla actualizada
$alumnos = $obj_tabla_alumnos->getTabla();

// Obtener los arrays de cursos y asignaturas
$cursos = $obj_tabla_alumnos->getCursos();
$asignaturas = $obj_tabla_alumnos->getAsignaturas();
