<?php 
/*
    Autor: Jaime Gómez Mesa
    Fichero: tabla_articulos.class.php
    Descripción: Clase Tabla_Articulos para gestionar una colección de artículos.
    Fecha: 11/11/2025
*/

class Class_tabla_articulos {
    private $articulos;

    // Constructor
    public function __construct() {
        $this->articulos = [];
    }

    // Método para añadir un artículo a la tabla
    public function agregarArticulo($articulo) {
        $this->articulos[] = $articulo;
    }

    // Método para obtener todos los artículos
    public function obtenerArticulos() {
        return $this->articulos;
    }
    // Método para obtener las marcas disponibles

    public function getMarcas() {

        return [
            'Samsung',
            'Apple',
            'Xiaomi',
            'Huawei',
            'Sony',
            'LG'
        ];
    }

    /*Metodo para obtener el array de categorias*/

    static function getCategorias() {
        return [
            'Electrónica',
            'Hogar',
            'Moda',
            'Deportes',
            'Juguetes',
            'Automotriz'
        ];
    }

    public function get_datos() {
        //crear articulos de ejemplo
        $articulo1 = new Class_articulo(1, 'Smartphone Samsung Galaxy S21', 'SM-G991B', 'Samsung', ['Electrónica'], 799.99, 50);
        $articulo2 = new Class_articulo(2, 'iPhone 13 Pro', 'A2636', 'Apple', ['Electrónica'], 999.99, 30);
        $articulo3 = new Class_articulo(3, 'Xiaomi Mi 11', 'M2011K2G', 'Xiaomi', ['Electrónica'], 699.99, 40);
        $articulo4 = new Class_articulo(4, 'Televisor LG OLED55CX6LA', 'OLED55CX6LA', 'LG', ['Electrónica', 'Hogar'], 1499.99, 20);
        $articulo5 = new Class_articulo(5, 'Cámara Sony Alpha a7 III', 'ILCE-7M3', 'Sony', ['Electrónica'], 1999.99, 15);
        //agregar articulos a la array
        $this->articulos[] = $articulo1;
        $this->articulos[] = $articulo2;
        $this->articulos[] = $articulo3;
        $this->articulos[] = $articulo4;
        $this->articulos[] = $articulo5;
    }
}

