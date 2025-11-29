<?php

/*
    modelo: create.model.php
    descripción: añade una nueva cuenta a la base de datos
    
    Método POST:
        - num_cuenta
        - id_cliente
        - fecha_alta
        - fecha_ul_mov
        - num_movtos
        - saldo
*/

// Cargo los detalles del formulario
$num_cuenta = $_POST['num_cuenta'];
$id_cliente = $_POST['id_cliente'];
$fecha_alta = $_POST['fecha_alta'];
$fecha_ul_mov = $_POST['fecha_ul_mov'];
$num_movtos = $_POST['num_movtos'];
$saldo = $_POST['saldo'];

// Creo un objeto de la clase cuenta
$cuenta = new class_cuenta(
    null,
    $num_cuenta,
    $id_cliente,
    $fecha_alta,
    $fecha_ul_mov,
    $num_movtos,
    $saldo
);

// Conecto con la base de datos
$gesbank = new class_tabla_cuentas();

// Ejecuto el método create
$gesbank->create($cuenta);

?>
