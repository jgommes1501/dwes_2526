<?php

/*
    modelo: show.model.php
    descripción: carga los datos de la cuenta a mostrar
    
    Método GET:
        - id de la cuenta
*/

// Cargo el id de la cuenta
$id = $_GET['id'];

// Conecto con la base de datos
$gesbank = new class_tabla_cuentas();

// Obtengo los detalles de la cuenta
$cuenta = $gesbank->read($id);

// Obtengo todos los clientes de la base de datos para obtener el nombre completo
$clientes = $gesbank->get_clientes();

?>
