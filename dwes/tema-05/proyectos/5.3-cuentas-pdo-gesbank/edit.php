<?php

/*
    controlador: edit.php
    descripción: Controlador para la edición de una cuenta existente
    
    Parámetros GET:
        - id: id de la cuenta a editar
*/

// Configuración base de datos
require_once('config/configDB.php');

// Clases
require_once('class/cuenta.class.php');
require_once('class/conexion.class.php');
require_once('class/tabla_cuentas.class.php');

// Modelo
require_once('models/edit.model.php');

// Vista
require_once('views/edit.view.php');

?>
