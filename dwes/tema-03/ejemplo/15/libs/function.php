<?php

/*
    Ejemplo 3.15
    Archivo: function.php
    Descripción: Uso de array como párametro de una función.
    Autor: Jaime Gómez Mesa
    Fecha: 21/10/2025
*/


function mostrar_alumno ($alumno = []) {
    

    echo "Nombre" . $alumno['nombre'] . "br";
    echo "Apellido" . $alumno['Apellido'] . "br";
    echo "Nombre" . $alumno['nombre'] . "br";

}

?>