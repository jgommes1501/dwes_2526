<!DOCTYPE html>
<html lang="es">

<head>
   
    <!-- Cargar bootstrap -->
   <?php include 'views/layouts/head.layout.php'; ?>
    <title> Proyecto - CRUD Gestión Libros</title>
    
</head>

<body>

    <!-- capa principal -->
    <div class="container mt-3">

        <!-- cabecera del documento -->
       <?php include 'views/partials/header.partial.php'; ?>

        <!-- Navegador o menu libros -->
        <?php include 'views/partials/menu.partial.php'; ?>

        <!-- contenido principal -->
        <main>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Idioma</th>
                            <th scope="col">Director</th>
                            <th scope="col">Género</th>
                            <th scope="col" class="text-end">Año</th>
                            <th scope="col" class="text-end">Millones</th>
                            <th scope="col">Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <!-- foreach peliculas -->
                        <?php foreach ($peliculas as $pelicula): ?>
                            <tr class="mb-3">   
                                <td><?php echo $pelicula['id']; ?></td>
                                <td><?php echo $pelicula['titulo']; ?></td>
                                <td><?php echo $pelicula['idioma']; ?></td>
                                <td><?php echo $pelicula['director']; ?></td>
                                <td><?php echo implode(", ", $pelicula['generos']); ?></td>
                                <td class="text-end"><?php echo $pelicula['año']; ?></td>
                                <td class="text-end"><?php echo $pelicula['recaudado'] / 1000000; ?></td>
                        <?php endforeach; ?>

                                <!-- botones de acción -->
                                <td class="text-end">
                                    <!-- boton eliminar -->
                                    <a href="#" class="btn btn-danger btn-sm" title="Eliminar">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <!-- boton editar -->
                                    <a href="edit.php?id=<?php echo $pelicula['id']; ?>" class="btn btn-primary btn-sm" title="Editar">
                                        <i class="bi bi-pencil"></i>    
                                    </a>
                                    <!-- boton ver -->
                                    <a href="ver.php?id=<?php echo $pelicula['id']; ?>" class="btn btn-info btn-sm" title="Ver">
                                        <i class="bi bi-eye"></i>
                                    </a>

                                </td>


                            </tr>
                        <!-- fin foreach -->
                    </tbody>
                    <tfoot>
                        <?php
                        $total_peliculas = count($peliculas);
                        ?>
                        <tr>
                            <td colspan="4">Total películas: </td>
                            <td class="text-end"><?php echo $total_peliculas; ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </main>

        <!-- pie de página -->
        <?php include 'views/partials/footer.partial.php'; ?>
    </div>

    <!-- javaScript bootstrap 5.3.8 -->
     <?php include 'views/layouts/js_bootstrap.layout.php'; ?>

    
</body>

</html>