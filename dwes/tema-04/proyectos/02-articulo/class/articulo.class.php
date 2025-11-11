<?php 

/*
    Autor: Jaime Gómez Mesa
    Fichero: articulo.class.php
    Descripción: Clase Artículo para gestionar artículos en una aplicación.
    Fecha: 11/11/2025
*/

class Class_articulo {
    private $id = null;
    private $descripcion = null;
    private $modelo = null;
    private $marca = null;
    private $categorias = null;
    private $precio = null;
    private $unidades = null;

    // Constructor

    public function __construct($id, $descripcion, $modelo, $marca, $categorias, $precio, $unidades) {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->categorias = $categorias;
        $this->precio = $precio;
        $this->unidades = $unidades;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getCategorias() {
        return $this->categorias;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getUnidades() {
        return $this->unidades;
    }

    // Setters
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    public function setMarca($marca) {
        $this->marca = $marca;
    }
    public function setCategorias($categorias) {
        $this->categorias = $categorias;
    }
    public function setPrecio($precio) {
        $this->precio = $precio;
    }
    public function setUnidades($unidades) {
        $this->unidades = $unidades;
    }
    
}
