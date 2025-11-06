<?php
/*
    Ejemplo 4.6
    Archivo: estatica.class.php
    Descripción: uso de atributos y métodos estáticos en una clase.
    Autor: Jaime Gómez Mesa
    Fecha: 05/11/2025
*/

// Incluir la definición de la clase Estatica

class Class_pelicula{
    //Atributo estático
    public $id;
    public $titulo;
    static public $pais = "España";

    function __construct($id, $titulo){
        $this->id = $id;
        $this->titulo = $titulo;
    }

    //Método estático
    public function mostrarPais(){
        return self::$pais;
    }

}