<?php
/*
    Ejemplo 4.2
    Archivo: index.php
    Descripción: Ejemplo de uso de la clase Vehiculo.
    Autor: Jaime Gómez Mesa
    Fecha: 05/11/2025
*/


//Incluir la clase Producto
include 'class/producto.class.php';

//Crear un objeto de la clase Producto
$miProducto = new Class_producto("tablet", 250.00, 3);

var_dump($miProducto);

//crear una instancia de la clase Producto con valores nulos
$productoNulo = new Class_producto();
    
//Asignar valores directamente a los atributos publicos
$productoNulo->nombre = "Smartwatch";
$productoNulo->precio = 150.00;
$productoNulo->cantidad = 5;

//Mostrar el contenido del objeto productoNulo
echo 'Nombre: ' . $productoNulo->nombre . '<br>';
echo 'Precio: ' . $productoNulo->precio . '<br>';
echo 'Cantidad: ' . $productoNulo->cantidad . '<br>';

?>