<?php 

    //función que devuelve un Array de películas
    function get_peliculas() {
        return [
            [
                'id' => 1,
                'titulo' => 'El viaje del héroe',
                'año' => 2018,
                'idioma' => 'Español',
                'director' => 'Alberto Ruiz',
                'generos' => ['Aventura', 'Drama'],
                'recaudado' => 1200000,
            ],
            [
                'id' => 2,
                'titulo' => 'La sombra del tiempo',
                'año' => 2021,
                'idioma' => 'Español',
                'director' => 'María López',
                'generos' => ['Suspense', 'Misterio'],
                'recaudado' => 2300000,
            ],
            [
                'id' => 3,
                'titulo' => 'Amor en París',
                'año' => 2019,
                'idioma' => 'Francés',
                'director' => 'Claire Dubois',
                'generos' => ['Romance', 'Comedia'],
                'recaudado' => 850000,
            ],
            [
                'id' => 4,
                'titulo' => 'Ciudad en llamas',
                'año' => 2017,
                'idioma' => 'Inglés',
                'director' => 'Michael Johnson',
                'generos' => ['Acción', 'Thriller'],
                'recaudado' => 3100000,
            ],
            [
                'id' => 5,
                'titulo' => 'La melodía olvidada',
                'año' => 2022,
                'idioma' => 'Español',
                'director' => 'Sofía Martínez',
                'generos' => ['Drama', 'Música'],
                'recaudado' => 450000,
            ],
            [
                'id' => 6,
                'titulo' => 'Operación Aurora',
                'año' => 2020,
                'idioma' => 'Inglés',
                'director' => 'David Kim',
                'generos' => ['Acción', 'Ciencia ficción'],
                'recaudado' => 1900000,
            ],

        ];
    }

   
    function peliculas_por_id($id) {
        $peliculas = get_peliculas();
        foreach ($peliculas as $pelicula) {
            if ($pelicula['id'] == $id) {
                return $pelicula;
            }
        }
        return null;
    }
