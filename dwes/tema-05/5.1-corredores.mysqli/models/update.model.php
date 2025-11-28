<?php

/*
    modelo: update.model.php
    descripción: actualiza los datos de un corredor en la base de datos
    
    Métod POST:
        
        - Los detalles del corredor
    
    Método GET:

        - id: id del corredor
    
*/

// Obtener id del corredor a actualizar
$corredor_id = $_GET['id'] ?? null;

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

// Actualizar corredor
// y cmprobar si se ha actualizado correctamente
if ($conexion->update($corredor, $corredor_id)) {
    // Éxito
    $notify = "Corredor actualizado correctamente.";
} else {
    // Error
    $error = "Error al actualizar el corredor: ";
}

// Cargo la lista de corredores actualizada
$corredores = $conexion->getCorredores();






