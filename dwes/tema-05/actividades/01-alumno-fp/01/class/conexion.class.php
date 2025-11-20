<?php
/*
    clase: conexion.class.php
    descripción: PERMITE CONECTAR CON LA BASE DE DATOS fp, a partir de los parametros de conexión:
    - server
    - user
    - password
    - bbdd
*/

class class_conexion {
    //propiedades
    public $server;
    public $user;
    public $password;
    public $bbdd;
    public $mysqli; //objeto de la clase mysqli

    //método constructor
    public function __construct(
        $server = "localhost",
        $user = "root",
        $password = "",
        $bbdd = "fp"
    ) {
        $this->server = $server;
        $this->user = $user;
        $this->password = $password;
        $this->bbdd = $bbdd;
    
    //habilitar las excepciones de mysqli
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    }
    //estructara try-catch para la conexión
    public function conectar() {
        try {
            //realizar la conexión
            $this->mysqli = new mysqli(
                $this->server,
                $this->user,
                $this->password,
                $this->bbdd
            );
        } catch (mysqli_sql_exception $e) {
        //mostrar mensaje de error
        include 'views/partials/errorDB.partial.php';
            
            exit();
        }
    }

}