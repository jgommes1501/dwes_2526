<?php

/*
    controlador: delete.php
    descripción: Controlador que permite eliminar una cuenta
    
    Parámetros GET:
        - id: id de la cuenta a eliminar
*/

// Configuración base de datos
require_once('config/configDB.php');

// Clases
require_once('class/cuenta.class.php');
require_once('class/conexion.class.php');
require_once('class/tabla_cuentas.class.php');

// Modelo
require_once('models/delete.model.php');

// Redirigir al controlador index
header('Location: index.php');

?>
