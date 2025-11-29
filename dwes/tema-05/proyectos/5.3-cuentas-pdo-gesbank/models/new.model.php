<?php

/*
    modelo: new.model.php
    descripción: genera los datos necesarios para el formulario de nueva cuenta
*/

// Realizo la conexión a la base de datos gesbank
$gesbank = new class_tabla_cuentas();

// Obtengo todos los clientes de la base de datos para el desplegable
$clientes = $gesbank->get_clientes();

?>
