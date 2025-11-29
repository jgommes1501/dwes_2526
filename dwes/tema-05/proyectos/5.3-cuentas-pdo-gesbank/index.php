<?php

/*
    controlador: index.php
    descripción: controlador principal de la aplicación - Muestra todas las cuentas

*/

// Configuración base de datos
require_once('config/configDB.php');

// Clases
require_once('class/cuenta.class.php');
require_once('class/conexion.class.php');
require_once('class/tabla_cuentas.class.php');

// Modelo
require_once('models/index.model.php');

// Vista
require_once('views/index.view.php');

?>
