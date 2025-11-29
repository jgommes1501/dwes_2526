<?php

/*
    controlador: order.php
    descripción. Controlador para ordenar la tabla de corredores por diferentes campos.
*/

// Configuración base de datos
require_once('config/configDB.php');

// Clases
require_once('class/corredor.class.php');
require_once('class/conexion.class.php');
require_once('class/tabla_corredores.class.php');

// Modelo
require_once('models/order.model.php');

// Vista
require_once('views/index.view.php');

?>