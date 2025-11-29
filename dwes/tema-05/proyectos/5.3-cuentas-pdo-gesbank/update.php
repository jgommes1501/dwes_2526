<?php

/*
    controlador: update.php
    descripción: Controlador que actualiza una cuenta existente
    
    Parámetros GET:
        - id: id de la cuenta a actualizar
        
    Método POST: todos los campos del formulario
*/

// Configuración base de datos
require_once('config/configDB.php');

// Clases
require_once('class/cuenta.class.php');
require_once('class/conexion.class.php');
require_once('class/tabla_cuentas.class.php');

// Modelo
require_once('models/update.model.php');

// Redirigir al controlador index
header('Location: index.php');

?>
