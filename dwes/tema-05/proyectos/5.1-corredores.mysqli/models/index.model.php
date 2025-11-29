<?php

/*
    modelo:  index.model.php
    descripción: obtiene los datos de corredores necesarios para mostrarlo en la vista principal
*/

// Creo un objeto de la clase tabla_corredores 
$tabla_corredores = new class_tabla_corredores();

// Obtengo un objeto de la clase mysqli_result con los detalles de los corredores
$corredores = $tabla_corredores->getCorredores();

?>