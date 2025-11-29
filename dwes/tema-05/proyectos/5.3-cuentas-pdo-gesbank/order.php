<?php

/*
    controlador: order.php
    descripción: Controlador que ordena las cuentas por un criterio
    
    Parámetros GET:
        - criterio: número de la columna por la que ordenar
*/

// Configuración base de datos
require_once('config/configDB.php');

// Clases
require_once('class/cuenta.class.php');
require_once('class/conexion.class.php');
require_once('class/tabla_cuentas.class.php');

// Modelo
require_once('models/order.model.php');

// Vista
require_once('views/index.view.php');

?>
