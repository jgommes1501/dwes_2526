<?php

/**
 * Clase Alumno
 * 
 * Define el modelo de la entidad alumno con propiedades públicas
 */
class Alumno
{
    public $id;
    public $nombre;
    public $apellidos;
    public $email;
    public $f_nacimiento;
    public $curso;
    public $asignaturas;

    /**
     * Constructor
     */
    public function __construct(
        $id = null,
        $nombre = null,
        $apellidos = null,
        $email = null,
        $f_nacimiento = null,
        $curso = null,
        $asignaturas = []
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->f_nacimiento = $f_nacimiento;
        $this->curso = $curso;
        $this->asignaturas = $asignaturas;
    }

    /**
     * Getters
     */
    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getF_nacimiento()
    {
        return $this->f_nacimiento;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function getAsignaturas()
    {
        return $this->asignaturas;
    }

    /**
     * Setters
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setF_nacimiento($f_nacimiento)
    {
        $this->f_nacimiento = $f_nacimiento;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;
    }

    public function setAsignaturas($asignaturas)
    {
        $this->asignaturas = $asignaturas;
    }

    /**
     * Método getEdad()
     * 
     * Devuelve la edad del alumno a partir de la fecha de nacimiento
     * 
     * @return int Edad del alumno
     */
    public function getEdad()
    {
        $fecha_actual = new DateTime();
        $fecha_nac = new DateTime($this->f_nacimiento);
        $edad = $fecha_actual->diff($fecha_nac);
        return $edad->y;
    }
}
