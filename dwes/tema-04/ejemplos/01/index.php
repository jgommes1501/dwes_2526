<?php
/*
    Ejemplo 4.1
    Archivo: index.php
    Descripción: Ejemplo de uso de la clase Vehiculo.
    Autor: Jaime Gómez Mesa
    Fecha: 05/11/2025
*/


//Incluir la clase Vehiculo
include 'class/vehiculo.class.php';

//Crear un objeto de la clase Vehiculo
$miVehiculo = new Class_vehiculo();

var_dump($miVehiculo);

//Establecer valores a los atributos del vehículo
$miVehiculo->setMatricula('1234-ABC');
$miVehiculo->setMarca('Toyota');
$miVehiculo->setModelo('Corolla');
$miVehiculo->setVelocidad(120);

//Mostrar los valores establecidos
echo "Matrícula: " . $miVehiculo->getMatricula() . "<br>";
echo "Marca: " . $miVehiculo->getMarca() . "<br>";
echo "Modelo: " . $miVehiculo->getModelo() . "<br>";
echo "Velocidad: " . $miVehiculo->getVelocidad() . " km/h<br>";

var_dump($miVehiculo);

?>