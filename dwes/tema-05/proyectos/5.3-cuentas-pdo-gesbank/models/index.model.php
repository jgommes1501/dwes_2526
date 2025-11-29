<?php

/*
    modelo: index.model.php
    descripción: obtiene los datos de las cuentas que luego se mostrarán en la vista
*/

// Realizo la conexión a la base de datos gesbank
$gesbank = new class_tabla_cuentas();

// Obtengo todas las cuentas de la base de datos
$cuentas = $gesbank->get_cuentas();

?>
