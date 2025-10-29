<?php
/*
    Actividad 3.8
    Archivo: search.php
    Descripción: Busca libros en el array según el término de búsqueda.
    Metodo: GET o URL
    Parámetros:
        - expresion: término de búsqueda
        - ejemplo: search.php?expresion=harry
        - salida: lista de libros que coinciden con el término de búsqueda

    Autor: Jaime Gómez Mesa
    Fecha: 29/10/2025
*/

include 'libs/functions.php';

include 'models/search.model.php';

include 'views/index.view.php';

?>
