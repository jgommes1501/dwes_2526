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

    static public function getMarcas() {

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
        $articulo1 = new Class_articulo(1, 'Smartphone Samsung Galaxy S21', 'SM-G991B', 3, [0, 3, 4], 799.99, 50);
        $articulo2 = new Class_articulo(2, 'iPhone 13 Pro', 'A2636', 1, [0, 3], 999.99, 30);
        $articulo3 = new Class_articulo(3, 'Xiaomi Mi 11', 'M2011K2G', 2, [0, 3, 4], 699.99, 40);
        $articulo4 = new Class_articulo(4, 'Televisor Sony Bravia 55"', 'KD-55XH9096', 4, [0, 1], 1199.99, 20);
        $articulo5 = new Class_articulo(5, 'Lavadora LG 8kg', 'F4WV508S0E', 5, [1], 499.99, 15);

        //agregar articulos a la array
        $this->articulos[] = $articulo1;
        $this->articulos[] = $articulo2;
        $this->articulos[] = $articulo3;
        $this->articulos[] = $articulo4;
        $this->articulos[] = $articulo5;
    }
    /*
        Convertir array de indices de categoria a nombres de categorias
    */

        static public function categorias_a_nombres($indices) {
            $todas_categorias = self::getCategorias();
            $nombres_categorias = [];

            foreach ($indices as $indice) {
                    $nombres_categorias[] = $todas_categorias[$indice];
                }
            return $nombres_categorias;
    }
    // Getter para artículos
    public function getArticulos() {
        return $this->articulos;
    }


    /*   
        Metodo: create()
        Descripción: Añade un nuevo artículo a la tabla de artículos.
        Parámetros:
            - objeto de la clase artículo

    */
    public function create(Class_articulo $articulo) {
        $this->articulos[] = $articulo;
    }
}

