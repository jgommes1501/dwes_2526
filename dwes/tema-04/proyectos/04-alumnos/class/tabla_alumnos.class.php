<?php

/**
 * Clase tabla_alumnos
 * 
 * Gestiona la tabla de alumnos
 */
class Tabla_alumnos
{
    public $tabla;

    /**
     * Constructor
     * 
     * Inicializa la tabla a un array vacío
     */
    public function __construct()
    {
        $this->tabla = [];
    }

    /**
     * getTabla()
     * 
     * Devuelve la tabla de alumnos
     */
    public function getTabla()
    {
        return $this->tabla;
    }

    /**
     * setTabla()
     * 
     * Establece la tabla de alumnos
     */
    public function setTabla($tabla)
    {
        $this->tabla = $tabla;
    }

    /**
     * create()
     * 
     * Añade un nuevo objeto alumno a la tabla
     * 
     * @param Alumno $alumno - Objeto de la clase Alumno
     */
    public function create(Alumno $alumno)
    {
        $this->tabla[] = $alumno;
    }

    /**
     * read()
     * 
     * Devuelve un objeto alumno a partir del índice
     * 
     * @param int $indice - Índice del alumno en la tabla
     * @return Alumno - Objeto alumno
     */
    public function read($indice)
    {
        return $this->tabla[$indice];
    }

    /**
     * update()
     * 
     * Actualiza los detalles de un alumno
     * 
     * @param Alumno $alumno - Objeto alumno con los nuevos datos
     * @param int $indice - Índice del alumno en la tabla
     */
    public function update(Alumno $alumno, $indice)
    {
        $this->tabla[$indice] = $alumno;
    }

    /**
     * delete()
     * 
     * Elimina un objeto alumno a partir del índice
     * 
     * @param int $indice - Índice del alumno en la tabla
     */
    public function delete($indice)
    {
        unset($this->tabla[$indice]);
        // Reindexar el array
        $this->tabla = array_values($this->tabla);
    }

    /**
     * getCursos()
     * 
     * Devuelve un array con todos los cursos disponibles
     * 
     * @return array - Array de cursos
     */
    public function getCursos()
    {
        return [
            '1SMR',
            '2SMR',
            '1DAW',
            '2DAW',
            '1AD',
            '2AD'
        ];
    }

    /**
     * getAsignaturas()
     * 
     * Devuelve un array con todas las asignaturas disponibles
     * 
     * @return array - Array de asignaturas
     */
    public function getAsignaturas()
    {
        return [
            'DWES',
            'DWEC',
            'Despliegue Aplicaciones',
            'HLC',
            'EINEM',
            'Diseño Interfaces',
            'Base de Datos',
            'Lenguaje de Marcas',
            'Sistemas Informáticos',
            'FOL',
            'Inglés'
        ];
    }

    /**
     * getAlumnos()
     * 
     * Carga la tabla con al menos 4 alumnos de ejemplo
     */
    public function getAlumnos()
    {
        $alumno1 = new Alumno(
            1,
            'Juan',
            'García Pérez',
            'juan.garcia@email.com',
            '2005-03-15',
            2, // 1DAW
            [0, 1, 2] // DWES, DWEC, Despliegue
        );

        $alumno2 = new Alumno(
            2,
            'María',
            'López Martínez',
            'maria.lopez@email.com',
            '2004-07-22',
            3, // 2DAW
            [0, 1, 2, 3, 5] // DWES, DWEC, Despliegue, HLC, Diseño Interfaces
        );

        $alumno3 = new Alumno(
            3,
            'Carlos',
            'Rodríguez Sánchez',
            'carlos.rodriguez@email.com',
            '2006-11-08',
            0, // 1SMR
            [6, 7, 8, 9] // Base de Datos, Lenguaje de Marcas, Sistemas, FOL
        );

        $alumno4 = new Alumno(
            4,
            'Ana',
            'Fernández Gómez',
            'ana.fernandez@email.com',
            '2005-01-30',
            2, // 1DAW
            [0, 1, 6, 7] // DWES, DWEC, Base de Datos, Lenguaje de Marcas
        );

        $alumno5 = new Alumno(
            5,
            'Pedro',
            'Martín Ruiz',
            'pedro.martin@email.com',
            '2003-09-12',
            4, // 1AD
            [0, 6, 9, 10] // DWES, Base de Datos, FOL, Inglés
        );

        $this->create($alumno1);
        $this->create($alumno2);
        $this->create($alumno3);
        $this->create($alumno4);
        $this->create($alumno5);
    }
}
