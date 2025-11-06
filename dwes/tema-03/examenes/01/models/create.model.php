<?php

//llamar a la array de películas
$peliculas = get_peliculas();

//crear nueva película
$new_pelicula = [];
$new_pelicula['id'] = $_POST['id'];
$new_pelicula['titulo'] = $_POST['titulo'];
$new_pelicula['idioma'] = $_POST['idioma'];
$new_pelicula['director'] = $_POST['director']; 
$new_pelicula['generos'] = explode(", ", $_POST['genero']);
$new_pelicula['año'] = $_POST['año'];
$new_pelicula['recaudado'] = $_POST['recaudacion'];
$peliculas[] = $new_pelicula;

//guardar la array actualizada
get_peliculas($peliculas);

