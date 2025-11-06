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

//Establecer valores a los atributos de el producto
$miProducto->setNombre('Smartphone');
$miProducto->setPrecio(499.99);
$miProducto->setCantidad(5);

//Mostrar los valores establecidos
echo 'Nombre: ' . $miProducto->getNombre() . '<br>';
echo 'Precio: ' . $miProducto->getPrecio() . '<br>';
echo 'Cantidad: ' . $miProducto->getCantidad() . '<br>';

var_dump($miProducto);

?>