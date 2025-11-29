<?php

/*
    modelo: create.model.php
    descripción: añadir nuevo corredor a la tabla de corredores
    
    
*/

// Recoger datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$ciudad = $_POST['ciudad'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$dni = $_POST['dni'];
$id_categoria = $_POST['id_categoria'];
$id_club = $_POST['id_club'];

// Calcular edad a partir de fecha de nacimiento
$fecha_actual = new DateTime();
$fecha_nac = new DateTime($fechaNacimiento);
$edad = $fecha_nac->diff($fecha_actual)->y;

// Validar datos (omitir para simplificar)

// Crear objeto corredor
$corredor = new class_corredor(
    null,
    $nombre,
    $apellidos,
    $ciudad,
    $fechaNacimiento,
    $sexo,
    $email,
    $dni,
    $edad,
    $id_categoria,
    $id_club
);

// Conexión a la base de datos
$conexion = new class_tabla_corredores();

// Añadir nuevo corredor
if ($conexion->create($corredor)) {
    // Éxito
    $notify = "Corredor añadido correctamente.";
} else {
    // Error
    $error = "Error al añadir el corredor: ";
}

// Obtener lista actualizada de corredores
$corredores = $conexion->getCorredores();



