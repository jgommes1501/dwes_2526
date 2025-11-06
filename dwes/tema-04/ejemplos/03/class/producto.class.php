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
    private $nombre;
    private $precio;
    private $cantidad;
    //Métodos constructores
    public function __construct() {
        $this->nombre = null;
        $this->precio = null;
        $this->cantidad = 0;
    }

    

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     */
    public function setPrecio($precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of cantidad
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set the value of cantidad
     */
    public function setCantidad($cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }
}
?>