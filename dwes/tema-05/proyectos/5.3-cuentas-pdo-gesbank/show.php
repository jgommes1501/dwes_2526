<?php

/*
    controlador: show.php
    descripción: Controlador que muestra los detalles de una cuenta sin edición
    
    Parámetros GET:
        - id: id de la cuenta a mostrar
*/

// Configuración base de datos
require_once('config/configDB.php');

// Clases
require_once('class/cuenta.class.php');
require_once('class/conexion.class.php');
require_once('class/tabla_cuentas.class.php');

// Modelo
require_once('models/show.model.php');

// Vista
require_once('views/show.view.php');

?>
