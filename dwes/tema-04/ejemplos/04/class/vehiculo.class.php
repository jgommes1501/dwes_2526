<?php 
/*
    Ejemplo 4.1
    Archivo: vehiculo.class.php
    Descripción: Clase que representa un vehículo.
    Autor: Jaime Gómez Mesa
    Fecha: 05/11/2025
*/  


Class Class_vehiculo {
    //Atributos o propiedades
    public $matricula;
    public $marca;
    public $modelo;
    public $velocidad;

    //Método constructor
    public function __construct() {
        $this->matricula = null;
        $this->marca     = null;
        $this->modelo    = null;
        $this->velocidad = 0;
    }
    //Metodos Getter y Setter
    //Sólo con propiedad de encapsulamiento

    //Obtener la matrícula
    public function getMatricula() {
        return $this->matricula;
    }
    //Establecer la matrícula
    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
    //Obtener la marca
    public function getMarca() {
        return $this->marca;
    }
    //Establecer la marca
    public function setMarca($marca) {
        $this->marca = $marca;
    }
    //Obtener el modelo
    public function getModelo() {
        return $this->modelo;
    }
    //Establecer el modelo
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    //Obtener la velocidad
    public function getVelocidad() {
        return $this->velocidad;
    }
    //Establecer la velocidad
    public function setVelocidad($velocidad) {
        $this->velocidad = $velocidad;
    }
    
}
?>