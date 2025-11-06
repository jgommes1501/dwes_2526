<?php 
/*
    Ejemplo 4.2
    Archivo: producto.class.php
    Descripción: Clase que representa un producto sin encapsulamiento.
    Autor: Jaime Gómez Mesa
    Fecha: 05/11/2025

    Todos los atributos y métodos son públicos. (Public)
*/  


Class Class_producto {
    //Atributos o propiedades
    public $nombre;
    public $precio;
    public $cantidad;
    //Métodos constructores
    public function __construct($nombre = null, $precio = null, $cantidad = 0) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
    }
}
?>