<?php

/*
    modelo: order.model.php
    descripción: ordena las cuentas por el criterio especificado
    
    Parámetros GET:
        - criterio: número de la columna por la que ordenar
            1: id
            2: num_cuenta
            3: cliente
            4: fecha_alta
            5: fecha_ul_mov
            6: num_movtos
            7: saldo
*/

// obtener criterio ordenación
$criterio = $_GET['criterio'];

// Conectar base de datos
$gesbank = new class_tabla_cuentas();

// Ejecutar ordenación
$cuentas = $gesbank->order($criterio);

// array con los nombres de las columnas para la notificación
$columnas = [
    1 => 'Id',
    2 => 'Num Cuenta',
    3 => 'Cliente',
    4 => 'Fecha Alta',
    5 => 'Fecha Últ. Mov',
    6 => 'Num Movimientos',
    7 => 'Saldo'
];

// notificación 
$notify = "Tabla ordenada por: " . $columnas[$criterio];

?>
