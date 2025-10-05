<?php

/*
    Moduelo: dividir.model.php
    Tipo: divide
    Proyecto 2.1 - Calculadora básica con PHP 
    Autor: Jaime Gómez Mesa
    Fecha: 2025/10/01
    Descripción: Crear una aplicación web que permita a los usuarios realizar las operaciones de cálculo básicas:
    suma, resta, división y multiplicación con dos valores numéricos introducidos previamente. ",
*/

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

// realizar la división
$resultado = $valor1 / $valor2;

$operacion = "Divide";


?>