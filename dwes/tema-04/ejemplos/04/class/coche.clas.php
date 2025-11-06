<?php

/*  
    Ejemplo 4.2
    Archivo: coche.class.php
    Descripción: Definición de la subclase Coche a partir de la clase Vehículo.
    Autor: Jaime Gómez Mesa
    Fecha: 05/11/2025

*/

class Class_coche extends Class_vehiculo {
    //Atributos o propiedades adicionales
    private $numPuertas;

    //Método constructor
    public function __construct() {
        //Llamada al constructor de la clase padre
        parent::__construct();
        $this->numPuertas = 4;
    }

    /**
     * Get the value of numPuertas
     */
    public function getNumPuertas()
    {
        return $this->numPuertas;
    }

    /**
     * Set the value of numPuertas
     */
    public function setNumPuertas($numPuertas): self
    {
        $this->numPuertas = $numPuertas;

        return $this;
    }
}

?>