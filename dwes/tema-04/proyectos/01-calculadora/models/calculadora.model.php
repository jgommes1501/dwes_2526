<?php

/*

*/


$valor1 = isset($_GET['valor1']) ? ($_GET['valor1']) : 0;
$valor2 = isset($_GET['valor2']) ? ($_GET['valor2']) : 0;
$operacion = isset($_GET['operacion']) ? $_GET['operacion'] : 0;
$calculadora = new Class_calculadora($valor1, $valor2, $operacion, 0);

switch ($operacion){
    case "sumar": 
        $calculadora -> sumar();
            break;
    case "restar":
        $calculadora -> restar();
            break;
    case "multiplicar":
        $calculadora -> multiplicar();
            break;
    case "dividir":
        $calculadora -> dividir();
            break;

}