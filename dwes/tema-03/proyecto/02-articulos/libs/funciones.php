<?php
/*
    Librería de funciones para la gestión de artículos
    - get_table_articulos(): Obtiene la tabla HTML con los artículos almacenados. 
    - get_tabla_categorias(): Obtiene la tabla HTML con las categorías de artículos. 
 
 */

//función que devuelve un Array de categorías que contenga el id y la categoría
function get_categorias() {
    return [
        [
            'id' => 1,
            'nombre' => 'Pc Sobremesa',
        ],
        [   
            'id' => 2,
            'nombre' => 'Portátil',
        ],
        [
            'id' => 3,
            'nombre' => 'Tablet',
        ],
        [
            'id' => 4,
            'nombre' => 'Smartphone',
        ],
        [
            'id' => 5,
            'nombre' => 'Monitor',
        ],
        [
            'id' => 6,
            'nombre' => 'Impresora',
        ],
    ];
}


    //función que devuelve un Array de artículos
    function get_articulos() {
        return [
            [
                'id' => 1,
                'descripcion' => 'Portátil HP 15.6"',
                'categoria' => 1,
                'modelo' => 'HP 15.6"',
                'stock' => 10,
                'precio' => 599.99,
            ],
            [
                'id' => 2,
                'descripcion' => 'Sobremesa Dell Inspiron',
                'categoria' => 1,
                'modelo' => 'Dell Inspiron',
                'stock' => 5,
                'precio' => 749.00,
            ],
            [
                'id' => 3,
                'descripcion' => 'Portátil Acer Aspire 14"',
                'categoria' => 2,
                'modelo' => 'Acer Aspire 14"',
                'stock' => 7,
                'precio' => 499.50,
            ],
            [
                'id' => 4,
                'descripcion' => 'Tablet Samsung Galaxy Tab A',
                'categoria' => 3,
                'modelo' => 'Galaxy Tab A 10.1',
                'stock' => 12,
                'precio' => 229.99,
            ],
            [
                'id' => 5,
                'descripcion' => 'Smartphone Xiaomi Redmi Note 12',
                'categoria' => 4,
                'modelo' => 'Redmi Note 12',
                'stock' => 15,
                'precio' => 199.95,
            ],
            [
                'id' => 6,
                'descripcion' => 'Monitor LG 24\" Full HD',
                'categoria' => 5,
                'modelo' => 'LG 24MP59G',
                'stock' => 8,
                'precio' => 129.99,
            ],
            [
                'id' => 7,
                'descripcion' => 'Impresora HP Envy 6030',
                'categoria' => 6,
                'modelo' => 'HP Envy 6030',
                'stock' => 4,
                'precio' => 89.99,
            ],
          
           ];
}

// Función para obtener el índice de un artículo por su ID
function get_indice_articulo_por_id($articulos, $id) {
    foreach ($articulos as $indice => $articulo) {
        if ($articulo['id'] == $id) {
            return $indice;
        }
    }
    return null; // Retorna null si no se encuentra el artículo
}