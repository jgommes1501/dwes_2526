<?php

//aqui va el codigo para actualizar la pelicula
$peliculas = get_peliculas();
$pelicula = $peliculas[$_GET['id']];


$pelicula['titulo'] = $_POST['titulo'];
$pelicula['idioma'] = $_POST['idioma'];
$pelicula['director'] = $_POST['director'];
$pelicula['generos'] = explode(", ", $_POST['genero']);
$pelicula['año'] = $_POST['año'];
$pelicula['recaudado'] = $_POST['recaudacion'];