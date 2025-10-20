<?php


/* 
    Ejemplo 3.12: uso de las funciones para array
    Jaime Gómez Mesa
*/

$frutas = ["naranja", "manzana", "plátano", "pera"];

echo "Array original : /n";
print_r($frutas);

unset($frutas[2]);

foreach ($frutas as $indice => $fruta){
    echo $indice. '' .$fruta . "/n";
}
?>