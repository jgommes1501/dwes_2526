<?php

/*
    Ejemplo 4.6
    Archivo: estatica.class.php
    Descripción: uso de atributos y métodos estáticos en una clase.
    Autor: Jaime Gómez Mesa
*/


// Incluir la definición de la clase Estatica
require_once("class/estatica.class.php");

//Crear un objeto de la clase Estatica
$miPelicula = new Class_pelicula(1, "El laberinto del fauno");

//Mostrar el país usando el método estático
echo "País: " . $miPelicula->mostrarPais() . "<br>";
//Mostrar el país accediendo directamente al atributo estático
echo "País: " . Class_pelicula::$pais . "<br>"; 