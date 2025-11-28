<?php

/*
    controlador: delete.php
    descripción. controlador eliminar corredor
*/


// Configuración base de datos
require_once('config/configDB.php');

// Clases
require_once('class/corredor.class.php');
require_once('class/conexion.class.php');
require_once('class/tabla_corredores.class.php');

// Modelo
require_once('models/delete.model.php');

// Redirecciono al controlador index
require_once('views/index.view.php');

?>