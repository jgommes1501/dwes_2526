<?php

/*
    clase: tabla_alumnos.class.php
    descripción: define la clase que va a permitir realizar CRUD alumnos:

    - index
    - añadir
    - actualizar
    - eliminar
    - buscar
    - ordenar
    Herencia: clase padre class_conexion 
*/

class class_tabla_alumnos extends class_conexion {

/*
    método: get_alumnos()
    descripción: obtiene todos los registros de la tabla alumnos
    param: ninguno
    return: objeto de la clase mysqli_result
*/

public function get_alumnos() {

    try {

    
    $sql = "
        select
            alumnos.id,
            concat_ws(' ', alumnos.nombre, alumnos.apellidos) as alumno,
            alumnos.email,
            alumnos.nacionalidad,
            alumnos.dni,
            TIMESTAMPDIFF(YEAR, alumnos.fecha_nac, NOW()) as edad,
            cursos.nombreCorto as curso
        from alumnos inner join cursos
        on alumnos.curso_id = cursos.id
        order by 1
            ";

    //Prepare
    //Crear un objeto de la clase mysqli_stmt
    $stmt = $this->mysqli->prepare($sql);

    //No necesita vincular parámetros
    //Ejecuto el comando
    $stmt->execute(); 

    //devuelve un objeto de la clase mysqli_stm
    return $stmt->get_result();
    } catch (mysqli_sql_exception $e) {
            echo "Error de conexión a la base de datos:<br>";
            echo "Mensaje " . $e->getMessage() . "<br>";
            echo "Código de error: " . $e->getCode() . "<br>";
            echo "Fichero: " . $e->getFile() . "<br>";
            echo "Línea: " . $e->getLine() . "<br>";
            
            exit();
        }
    }

/*
    método: get_cursos()
    descripción: obtiene todos los registros de la tabla cursos
    param: ninguno
    return: array asociativo con id y nombreCorto de los cursos
*/

public function get_cursos() {

    try {

    
    $sql = "
        select
            id,
            nombreCorto as curso
        from cursos
        order by 2
        ";

    //Prepare
    //Crear un objeto de la clase mysqli_stmt
    $stmt = $this->mysqli->prepare($sql);

    //No necesita vincular parámetros
    //Ejecuto el comando
    $stmt->execute(); 

    //devuelve un objeto de la clase mysqli_result
    $curso = $stmt->get_result();



    //devuelve un objeto de la clase mysqli_stm
    return $curso->fetch_all(MYSQLI_ASSOC);

    } catch (mysqli_sql_exception $e) {
            echo "Error de conexión a la base de datos:<br>";
            echo "Mensaje " . $e->getMessage() . "<br>";
            echo "Código de error: " . $e->getCode() . "<br>";
            echo "Fichero: " . $e->getFile() . "<br>";
            echo "Línea: " . $e->getLine() . "<br>";
            
            exit();
        }
    }

  
}

?>