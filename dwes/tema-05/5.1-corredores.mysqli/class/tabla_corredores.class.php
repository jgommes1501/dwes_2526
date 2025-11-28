<?php

/*
    clase: clase_tabla_corredores
    descripción: define la clase que va a permitir realizar CRUD corredores:
        - index
        - añadir
        - actualizar
        - eliminar
        - buscar
        - ordenar
    
        herencia: clase padre class_conexion

*/


class class_tabla_corredores extends class_conexion
{


    /*
    método:  getCorredores()
    descripción: extrae los corredores de la tabla corredores
    parámetros:
    devuelve: objeto de la clase mysqli_result
    */

    public function getCorredores()
    {

        try {

            $sql = "

            SELECT 
                    corredores.id,
                    corredores.nombre,
                    corredores.apellidos,
                    corredores.ciudad,
                    corredores.email,
                    TIMESTAMPDIFF(YEAR, corredores.fechaNacimiento, NOW()) as edad,
                    categorias.nombreCorto as categoria,
                    clubs.nombreCorto as club
            FROM corredores 
            INNER JOIN categorias ON corredores.id_categoria = categorias.id
            INNER JOIN clubs ON corredores.id_club = clubs.id
            ORDER BY corredores.id
    
            ";

            // Prepare
            // Crear un objeto de la clase mysqli_stmt
            $stmt = $this->mysqli->prepare($sql);

            // compruebo prepare
            if (!$stmt) {
                throw new mysqli_sql_exception("Error en prepare(): " . $this->mysqli->error);
            }

            // No necesita vincular parámetros
            // Ejecuto el comando
            $stmt->execute();

            // devuelve un objeto de la clase mysqli_result
            return $stmt->get_result();
        } catch (mysqli_sql_exception $e) {

            // mostrar error de base de datos
            include 'views/partials/errorDB.partial.php';

            // paro la ejecución 
            return false;
        } finally {

            // libero sentencia preprada
            if (isset($stmt)) {
                $stmt->close();
            }
        }
    }

    /*
    método:  getCategorias()
    descripción: extrae todas las categorías de la base de datos maratoon
    parámetros:
    devuelve: array asociativo con las categorías con id y nombre
    */

    public function getCategorias()
    {

        try {

            $sql = "

            SELECT 
                    id,
                    nombre
            FROM categorias
            ORDER BY nombre
    
            ";

            // Prepare
            // Crear un objeto de la clase mysqli_stmt
            $stmt = $this->mysqli->prepare($sql);

            // compruebo prepare
            if (!$stmt) {
                throw new mysqli_sql_exception("Error en prepare(): " . $this->mysqli->error);
            }

            // No necesita vincular parámetros
            // Ejecuto el comando

            $stmt->execute();

            // devuelve un objeto de la clase mysqli_result
            $categorias = $stmt->get_result();

            // paso el resultado a un array asociativo
            return $categorias->fetch_all(MYSQLI_ASSOC);
        } catch (mysqli_sql_exception $e) {

            // mostrar error de base de datos
            include 'views/partials/errorDB.partial.php';

            // paro la ejecución 
            exit();
        }
    }

    /*
    método:  getClubs()
    descripción: extrae todos los clubs de la base de datos maratoon
    parámetros:
    devuelve: array asociativo con los clubs con id y nombre
    */

    public function getClubs()
    {

        try {

            $sql = "

            SELECT 
                    id,
                    nombre
            FROM clubs
            ORDER BY nombre
    
            ";

            // Prepare
            // Crear un objeto de la clase mysqli_stmt
            $stmt = $this->mysqli->prepare($sql);

            // compruebo prepare
            if (!$stmt) {
                throw new mysqli_sql_exception("Error en prepare(): " . $this->mysqli->error);
            }

            // No necesita vincular parámetros
            // Ejecuto el comando

            $stmt->execute();

            // devuelve un objeto de la clase mysqli_result
            $clubs = $stmt->get_result();

            // paso el resultado a un array asociativo
            return $clubs->fetch_all(MYSQLI_ASSOC);
        } catch (mysqli_sql_exception $e) {

            // mostrar error de base de datos
            include 'views/partials/errorDB.partial.php';

            // paro la ejecución 
            exit();
        }
    }

    /*
        método: create()
        descripción: añade un nuevo corredor a la tabla corredores
        parámetros: objeto de la clase class_corredor 
        devuelve: nuevo id o false

    */
    public function create(class_corredor $corredor)
    {
        try {

            // Crear la sentencia preparada
            $sql = "
                    INSERT INTO 
                        corredores( 
                                nombre,
                                apellidos,
                                ciudad,
                                fechaNacimiento,
                                sexo,
                                email,
                                dni,
                                edad,
                                id_categoria,
                                id_club
                            )
                    VALUES    (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)                            
                    ";

            // ejecuto la sentenecia preprada y obtengo el objeto mysqli_stmt
            $stmt = $this->mysqli->prepare($sql);

            // compruebo prepare
            if (!$stmt) {
                throw new mysqli_sql_exception("Error en prepare(): " . $this->mysqli->error);
            }

            // vinculación de parámetros
            $stmt->bind_param(
                'sssssssiii',
                $corredor->nombre,
                $corredor->apellidos,
                $corredor->ciudad,
                $corredor->fechaNacimiento,
                $corredor->sexo,
                $corredor->email,
                $corredor->dni,
                $corredor->edad,
                $corredor->id_categoria,
                $corredor->id_club
            );

            // Ejecuto la sentencia preparada insert
            $stmt->execute();

            // Obtengo el id del nuevo corredor insertado
            $new_id = $this->mysqli->insert_id;

            // devuelvo nuevo id
            return $new_id;
        } catch (mysqli_sql_exception $e) {

            // error de base dedatos
            include 'views/partials/errorDB.partial.php';

            // devuelvo false
            return false;
        } finally {

            // libero sentencia preprada
            if (isset($stmt)) {
                $stmt->close();
            }
        }
    }

    /*
        método: read()
        descripción: obtiene los datos de un corredor a partir de su id
        parámetros: id del corredor
        devuelve: objeto de la clase class_corredor
    */

    public function read($id)
    {
        try {

            // Crear la sentencia sql
            $sql = "SELECT * FROM corredores WHERE id = ? LIMIT 1";

            // Creo la sentencia preprada objeto clase mysqli_stmt
            $stmt = $this->mysqli->prepare($sql);

            // compruebo prepare
            if (!$stmt) {
                throw new mysqli_sql_exception("Error en prepare(): " . $this->mysqli->error);
            }

            // vinculación de parámetros
            $stmt->bind_param(
                'i',
                $id
            );

            // ejecutamos
            $stmt->execute();

            // Devolvemos objeto de la clase mysqli_result
            $result = $stmt->get_result();

            // Devolvemos un objeto de la clase corredor
            return $result->fetch_object();
        } catch (mysqli_sql_exception $e) {

            // error de base dedatos
            include 'views/partials/errorDB.partial.php';

            // devuelvo false
            return false;
        } finally {

            // libero sentencia preprada
            if (isset($stmt)) {
                $stmt->close();
            }
        }
    }

    /*
        método: update()
        descripción: actualiza los datos de un corredor en la base de datos
        parámetros: 
            - objeto de la clase class_corredor 
            - id del corredor a actualizar
        devuelve: true o false
    */

    public function update(class_corredor $corredor, $corredor_id)
    {
        try {

            // Crear la sentencia preparada
            $sql = "
                    UPDATE 
                        corredores
                    SET 
                        nombre = ?,
                        apellidos = ?,
                        ciudad = ?,
                        fechaNacimiento = ?,
                        sexo = ?,
                        email = ?,
                        dni = ?, 
                        edad = ?,
                        id_categoria = ?,
                        id_club = ?
                    WHERE 
                        id = ?                            
                    ";

            // ejecuto la sentenecia preprada y obtengo el objeto mysqli_stmt
            $stmt = $this->mysqli->prepare($sql);

            // compruebo prepare
            if (!$stmt) {
                throw new mysqli_sql_exception("Error en prepare(): " . $this->mysqli->error);
            }

            // vinculación de parámetros
            $stmt->bind_param(
                'sssssssiiii',
                $corredor->nombre,
                $corredor->apellidos,
                $corredor->ciudad,
                $corredor->fechaNacimiento,
                $corredor->sexo,
                $corredor->email,
                $corredor->dni,
                $corredor->edad,
                $corredor->id_categoria,
                $corredor->id_club,
                $corredor_id
            );

            // Ejecuto la sentencia preparada update
            $stmt->execute();

            // devuelve true
            return true;
        } catch (mysqli_sql_exception $e) {

            // error de base dedatos
            include 'views/partials/errorDB.partial.php';

            // paro la ejecución
            return false;
        } finally {

            // libero sentencia preprada
            if (isset($stmt)) {
                $stmt->close();
            }
        }
    }

    /*
        método: delete()
        descripción: elimina un corredor de la base de datos
        parámetros: id: del corredor a eliminar
        devuelve: true o false
    */
    public function delete($id)
    {
        try {

            // Crear la sentencia sql
            $sql = "DELETE FROM corredores WHERE id = ? LIMIT 1";

            // Creo la sentencia preprada objeto clase mysqli_stmt
            $stmt = $this->mysqli->prepare($sql);

            // compruebo prepare
            if (!$stmt) {
                throw new mysqli_sql_exception("Error en prepare(): " . $this->mysqli->error);
            }

            // vinculación de parámetros
            $stmt->bind_param(
                'i',
                $id
            );

            // ejecutamos
            $stmt->execute();

            return true;
        } catch (mysqli_sql_exception $e) {

            // error de base dedatos
            include 'views/partials/errorDB.partial.php';

            // devuelvo false
            return false;
        } finally {

            // libero sentencia preprada
            if (isset($stmt)) {
                $stmt->close();
            }
        }
    }

    /*
        método: order_by()
        descripción: obtiene los corredores ordenados por el campo indicado
        parámetros: 
            - $criterio : nº del campo por el que se ordena
        
        devuelve: objeto de la clase mysqli_result
    */

    public function order_by($criterio)
    {
        try {

            $sql = "

            SELECT 
                    corredores.id,
                    corredores.nombre,
                    corredores.apellidos,
                    corredores.ciudad,
                    corredores.email,
                    TIMESTAMPDIFF(YEAR, corredores.fechaNacimiento, NOW()) as edad,
                    categorias.nombreCorto as categoria,
                    clubs.nombreCorto as club
            FROM corredores 
            INNER JOIN categorias ON corredores.id_categoria = categorias.id
            INNER JOIN clubs ON corredores.id_club = clubs.id
            ORDER BY ?
    
            ";

            // Prepare
            // Crear un objeto de la clase mysqli_stmt
            $stmt = $this->mysqli->prepare($sql);

            // compruebo prepare
            if (!$stmt) {
                throw new mysqli_sql_exception("Error en prepare(): " . $this->mysqli->error);
            }

            // vinculación de parámetros
            $stmt->bind_param(
                'i',
                $criterio
            );

            // No necesita vincular parámetros
            // Ejecuto el comando
            $stmt->execute();

            // devuelve un objeto de la clase mysqli_result
            return $stmt->get_result();
        } catch (mysqli_sql_exception $e) {

            // mostrar error de base de datos
            include 'views/partials/errorDB.partial.php';

            // paro la ejecución 
            return false;
        } finally {

            // libero sentencia preprada
            if (isset($stmt)) {
                $stmt->close();
            }
        }
    }

    /*
        método: filter()
        descripción: obtiene los corredores que coinciden con el criterio de búsqueda
        parámetros: 
            - $prompt : cadena de búsqueda
        
        devuelve: objeto de la clase mysqli_result          

    */
    public function filter($prompt)
    {
        try {

            // sentencia sql
            $sql = "
            SELECT 
                corredores.id,
                corredores.nombre,
                corredores.apellidos,
                corredores.ciudad,
                corredores.email,
                TIMESTAMPDIFF(YEAR, corredores.fechaNacimiento, NOW()) as edad,
                categorias.nombreCorto as categoria,
                clubs.nombreCorto as club
            FROM 
                corredores 
            INNER JOIN
                categorias ON corredores.id_categoria = categorias.id
            INNER JOIN
                clubs ON corredores.id_club = clubs.id
            WHERE 
            CONCAT_WS(' ',
                        corredores.id, 
                        corredores.nombre,
                        corredores.apellidos, 
                        corredores.ciudad,
                        corredores.email, 
                        corredores.dni, 
                        TIMESTAMPDIFF(YEAR, corredores.fechaNacimiento, NOW()),
                        corredores.fechaNacimiento,
                        corredores.sexo,
                        categorias.nombreCorto,
                        categorias.nombre,
                        clubs.nombreCorto,
                        clubs.nombre) 
            LIKE ?

            ORDER BY corredores.id
            ";

            // ejecuto prepare
            $stmt = $this->mysqli->prepare($sql);

            // compruebo prepare
            if (!$stmt) {
                throw new mysqli_sql_exception("Error en prepare(): " . $this->mysqli->error);
            }

            // arreglamos expresión para operador like
            $prompt = '%' . $prompt . '%';

            // vincular parámetros
            $stmt->bind_param(
                's',
                $prompt
            );

            // ejecutamos
            $stmt->execute();

            // Devolvemos objeto de la clase mysqli_result
            $result = $stmt->get_result();

            // Devolvemos mysqli_result
            return $result;
        } catch (mysqli_sql_exception $e) {

            // error de base dedatos
            include 'views/partials/errorDB.partial.php';

            return false;
        } finally {

            // libero sentencia preprada
            if (isset($stmt)) {
                $stmt->close();
            }
        }
    }
}

?>
