<?php

/*
    clase: alumno.class.php
    descripción: clase con las propiedades extraidas de las columnas de la tabla alumnos de fp.
*/

class class_alumno {
    //propiedades
    public $id;
    public $nombre;
    public $apellidos;
    public $email;
    public $telefono;
    public $nacionalidad;
    public $dni;
    public $fecha_nac;
    public $curso_id;

    //método constructor
    public function __construct(
        $id= null ,
        $nombre = null,
        $apellidos = null,
        $email = null,
        $telefono = null,
        $nacionalidad = null,
        $dni = null,
        $fecha_nac = null,
        $curso_id = null
    ) 
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->nacionalidad = $nacionalidad;
        $this->dni = $dni;
        $this->fecha_nac = $fecha_nac;
        $this->curso_id = $curso_id;
    }

/*
    Función: edad()
    descripción: calcula la edad del alumno a partir de su fecha de nacimiento.
    return: edad en años (entero)
*/

    public function edad() {
        $fecha_nacimiento = new DateTime($this->fecha_nac);
        $hoy = new DateTime();
        $edad = $hoy->diff($fecha_nacimiento);
        return $edad->y;
    }

}


?>