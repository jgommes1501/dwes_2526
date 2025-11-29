<?php

/*
    clase: class_corredor
    descripción: clase con propiedades extraidas de las columnas de la tabla corredores de maratoon

*/

class class_corredor {
    public $id;
    public $nombre;
    public $apellidos;
    public $ciudad;
    public $fechaNacimiento;
    public $sexo;
    public $email;
    public $dni;
    public $edad;
    public $id_categoria;
    public $id_club;

    public function __construct(
        $id = null,
        $nombre = null,
        $apellidos = null,
        $ciudad = null,
        $fechaNacimiento = null,
        $sexo = null,
        $email = null,
        $dni = null,
        $edad = null,
        $id_categoria = null,
        $id_club = null
    )
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->ciudad = $ciudad;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->dni = $dni;
        $this->edad = $edad;
        $this->id_categoria = $id_categoria;
        $this->id_club = $id_club;
    }

    /*
        función: edad()
        descripción: devuelve la edad a partir de la fecha de nacimiento
    */

    public function edad()
    {
        $fecha_actual = new DateTime(); // Fecha actual
        $fecha_nacimiento = new DateTime($this->fechaNacimiento); // Fecha de nacimiento
        $edad = $fecha_nacimiento->diff($fecha_actual); // Diferencia entre las fechas
        return $edad->y; // Devuelve solo los años
    }
}


?>
