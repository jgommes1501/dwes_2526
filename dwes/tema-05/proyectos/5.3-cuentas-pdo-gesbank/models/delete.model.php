<?php

/*
    modelo: delete.model.php
    descripción: elimina una cuenta de la base de datos
    
    Método GET:
        - id: id de la cuenta a eliminar
*/

// Cargo el id de la cuenta
$id = $_GET['id'];

// Conecto con la base de datos
$gesbank = new class_tabla_cuentas();

// Ejecuto el método delete
$gesbank->delete($id);

?>
