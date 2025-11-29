<?php

/*
    controlador: create.php
    descripción: Controlador que permite añadir una nueva cuenta
*/

// Configuración base de datos
require_once('config/configDB.php');

// Clases
require_once('class/cuenta.class.php');
require_once('class/conexion.class.php');
require_once('class/tabla_cuentas.class.php');

// Modelo
require_once('models/create.model.php');

// Redirigir al controlador index
header('Location: index.php');

?>
