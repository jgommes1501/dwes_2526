<?php

// 1️⃣ Cargar la tabla actual de libros
$libros = get_tabla_libros();

// 2️⃣ Obtener el ID del libro desde POST
$id = $_POST['id'] ?? null;

if ($id === null) {
    echo "Error: ID no proporcionado.";
    exit();
}

// 3️⃣ Buscar el índice del libro por su ID
$indice = get_indice_libro_por_id($libros, $id);

if ($indice === null) {
    echo "Error: Libro no encontrado.";
    exit();
}

// 4️⃣ Actualizar los datos del libro en memoria
$libros[$indice] = [
    'id' => $id,
    'titulo' => $_POST['titulo'] ?? $libros[$indice]['titulo'],
    'autor' => $_POST['autor'] ?? $libros[$indice]['autor'],
    'genero' => $_POST['genero'] ?? $libros[$indice]['genero'],
    'editorial' => $_POST['editorial'] ?? $libros[$indice]['editorial'],
    'precio' => $_POST['precio'] ?? $libros[$indice]['precio'],
];

// 5️⃣ Mostrar confirmación o redirigir a la lista
echo "Libro actualizado correctamente.";
// o usar header("Location: index.php"); si quieres redirigir
?>
