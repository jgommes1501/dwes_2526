<?php 

/*
    Autor: Jaime Gómez Mesa
    Fichero: articulo.class.php
    Descripción: Clase Artículo para gestionar artículos en una aplicación SIN ENCAPSULAMIENTO.
    Fecha: 11/11/2025
*/

class Class_articulo {
    public $id;
    public $descripcion;
    public $modelo;
    public $marca;
    public $categorias;
    public $precio;
    public $unidades;

    // Constructor
    public function __construct($id = null, $descripcion = null, $modelo = null, $marca = null, $categorias = null, $precio = null, $unidades = null) {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->categorias = $categorias;
        $this->precio = $precio;
        $this->unidades = $unidades;
    }
    
}
