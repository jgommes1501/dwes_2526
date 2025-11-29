<?php

/*
    clase: class_tabla_cuentas
    descripción: define la clase que va a permitir realizar CRUD de cuentas en la tabla cuentas de la base de datos gesbank:
        - index
        - añadir
        - actualizar
        - eliminar
        - buscar
        - ordenar
    
        herencia: class_conexion

*/


class class_tabla_cuentas extends class_conexion
{


    /*
        método: get_cuentas()
        descripción: extrae los detalles de las cuentas que se van a mostrar en la vista principal
        parámetros: ninguno
        devuelve: devuelve un objeto de la clase PDOStatement con los registros obtenidos
        errores: muestra un mensaje de error si hay problemas con la base de datos
    */

    public function get_cuentas()
    {

        try {

            $sql = "
            SELECT 
                c.id,
                c.num_cuenta,
                CONCAT(cl.apellidos, ', ', cl.nombre) AS cliente,
                c.fecha_alta,
                c.fecha_ul_mov,
                c.num_movtos,
                c.saldo
            FROM cuentas AS c
            LEFT JOIN clientes AS cl ON c.id_cliente = cl.id
            ORDER BY c.id ASC
            ";

            // Ejecuto Prepare
            // Crear un objeto de la clase PDOStatement
            $stmt = $this->pdo->prepare($sql);

            // establezco el tipo de fetch a objeto
            $stmt->setFetchMode(PDO::FETCH_OBJ);

            // Ejecuto el comando sql
            $stmt->execute();

            // devuelve objeto de la clase PDOStatement
            return $stmt;
        } catch (PDOException $e) {

            // mostrar error de base de datos
            include 'views/partials/errorDB.partial.php';

            // paro la ejecución 
            return false;
        } 
    }

    /*
        método: get_clientes()
        descripción: obtiene un array asociativo con los clientes de la base de datos
        Índices: id => apellidos, nombre   
    */

    public function get_clientes()
    {
        try {

            $sql = "SELECT id, CONCAT(apellidos, ', ', nombre) AS nombre_completo FROM clientes ORDER BY apellidos, nombre ASC";

            // Ejecuto Prepare
            // Crear un objeto de la clase PDOStatement
            $stmt = $this->pdo->prepare($sql);

            // Ejecuto el comando sql
            $stmt->execute();

            // obtengo un array asociativo con los resultados
            $clientes = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);

            // devuelvo el array asociativo
            return $clientes;
        } catch (PDOException $e) {

            // mostrar error de base de datos
            include 'views/partials/errorDB.partial.php';

            // paro la ejecución 
            return false;
        } 
    }

    /*
        metodo: create()
        descripción: crea una nueva cuenta en la base de datos
        
        parámetros: 
            - $cuenta: objeto de la clase class_cuenta con los datos de la cuenta a crear 
        devuelve: 
            - id de la cuenta creada si se ha creado correctamente
            - false si hay algún error
    */
    
    public function create($cuenta)
    {
        try {

            // preparo la consulta sql para insertar la cuenta
            $sql = "INSERT INTO cuentas (
                        num_cuenta, 
                        id_cliente, 
                        fecha_alta, 
                        fecha_ul_mov, 
                        num_movtos,
                        saldo
                    ) 
                    VALUES (
                        :num_cuenta, 
                        :id_cliente, 
                        :fecha_alta, 
                        :fecha_ul_mov, 
                        :num_movtos,
                        :saldo
                    )";

            // creo el objeto PDOStatement
            $stmt = $this->pdo->prepare($sql);

            // vinculo los parámetros
            $stmt->bindParam(':num_cuenta', $cuenta->num_cuenta, PDO::PARAM_STR, 20);
            $stmt->bindParam(':id_cliente', $cuenta->id_cliente, PDO::PARAM_INT);
            $stmt->bindParam(':fecha_alta', $cuenta->fecha_alta, PDO::PARAM_STR);
            $stmt->bindParam(':fecha_ul_mov', $cuenta->fecha_ul_mov, PDO::PARAM_STR);
            $stmt->bindParam(':num_movtos', $cuenta->num_movtos, PDO::PARAM_INT);
            $stmt->bindParam(':saldo', $cuenta->saldo, PDO::PARAM_STR);

            // ejecuto la consulta
            $stmt->execute();

            // obtengo el id de la cuenta insertada
            $cuenta_id = $this->pdo->lastInsertId();

            // devuelvo el id de la cuenta creada
            return $cuenta_id;
        } catch (PDOException $e) {

                // muestro el error de base de datos
                include 'views/partials/errorDB.partial.php';
                return false;
        }

    }

    /*
        método: read()
        descripción: obtiene los detalles de una cuenta a partir de su id
        parámetros: 
            - $id: id de la cuenta a obtener
        devuelve: 
            - objeto con los datos de la cuenta
            - false si hay algún error
    */
    public function read($id)
    {
        try {

            $sql = "SELECT 
                        id,
                        num_cuenta,
                        id_cliente,
                        fecha_alta,
                        fecha_ul_mov,
                        num_movtos,
                        saldo
                    FROM cuentas 
                    WHERE id = :id 
                    LIMIT 1";

            // creo el objeto PDOStatement
            $stmt = $this->pdo->prepare($sql);

            // vinculo el parámetro
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            // ejecuto la consulta
            $stmt->execute();

            // establezco el modo de fetch a objeto
            $stmt->setFetchMode(PDO::FETCH_OBJ);

            // obtengo la cuenta
            $cuenta = $stmt->fetch();

            // devuelvo la cuenta
            return $cuenta;
        } catch (PDOException $e) {

            // mostrar error de base de datos
            include 'views/partials/errorDB.partial.php';

            // paro la ejecución 
            return false;
        } 
    }

    /*
        método: update()
        descripción: actualiza los detalles de una cuenta en la base de datos.
        parámetros: 
            - $cuenta: objeto de la clase class_cuenta con los datos de la cuenta a actualizar 
            - $id: id de la cuenta a actualizar
        devuelve: 
            - true si se ha actualizado correctamente
            - false si hay algún error
    */

    public function update(class_cuenta $cuenta, $id)
    {
        try {

            // preparo la consulta sql para actualizar la cuenta
            $sql = "UPDATE cuentas 
                    SET 
                        num_cuenta = :num_cuenta,
                        id_cliente = :id_cliente, 
                        fecha_alta = :fecha_alta, 
                        fecha_ul_mov = :fecha_ul_mov, 
                        num_movtos = :num_movtos,
                        saldo = :saldo
                    
                    WHERE id = :id 
                    LIMIT 1";

            $stmt = $this->pdo->prepare($sql);

            // vinculo los parámetros
            $stmt->bindParam(':num_cuenta', $cuenta->num_cuenta, PDO::PARAM_STR, 20);
            $stmt->bindParam(':id_cliente', $cuenta->id_cliente, PDO::PARAM_INT);
            $stmt->bindParam(':fecha_alta', $cuenta->fecha_alta, PDO::PARAM_STR);
            $stmt->bindParam(':fecha_ul_mov', $cuenta->fecha_ul_mov, PDO::PARAM_STR);
            $stmt->bindParam(':num_movtos', $cuenta->num_movtos, PDO::PARAM_INT);
            $stmt->bindParam(':saldo', $cuenta->saldo, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            // ejecuto la consulta
            $stmt->execute();

            // devuelvo true si se ha actualizado correctamente
            return true;
        } catch (PDOException $e) {

                // muestro el error de base de datos
                include 'views/partials/errorDB.partial.php';

                // devuelvo false
                return false;
        }
    }

    /*
        método: delete()
        descripción: elimina una cuenta de la base de datos
        parámetros: 
            - $id: id de la cuenta a eliminar
        devuelve: 
            - true si se ha eliminado correctamente
            - false si hay algún error
    */
    
    public function delete($id)
    {
        try {

            // preparo la consulta sql para eliminar la cuenta
            $sql = "DELETE FROM cuentas WHERE id = :id LIMIT 1";

            $stmt = $this->pdo->prepare($sql);

            // vinculo el parámetro
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            // ejecuto la consulta
            $stmt->execute();

            // devuelvo true si se ha eliminado correctamente
            return true;
        } catch (PDOException $e) {

                include 'views/partials/errorDB.partial.php';
                return false;
        }
    }

    /*
        método: order()
        descripción: ordena las cuentas en la base de datos por un campo determinado
        parámetros: 
            - $criterio: número de la columna por la que se va a ordenar
        devuelve: 
            - objeto PDOStatement con los resultados ordenados
            - false si hay algún error
    */
    public function order(int $criterio)
    {
        try {

            // array con los nombres de las columnas
            $columnas = [
                1 => 'c.id',
                2 => 'c.num_cuenta',
                3 => 'cliente',
                4 => 'c.fecha_alta',
                5 => 'c.fecha_ul_mov',
                6 => 'c.num_movtos',
                7 => 'c.saldo'
            ];

            // compruebo que el criterio es válido
            if (!array_key_exists($criterio, $columnas)) {
                $criterio = 1; // por defecto ordeno por id
            }

            $sql = "
            SELECT 
                c.id,
                c.num_cuenta,
                CONCAT(cl.apellidos, ', ', cl.nombre) AS cliente,
                c.fecha_alta,
                c.fecha_ul_mov,
                c.num_movtos,
                c.saldo
            FROM cuentas AS c
            LEFT JOIN clientes AS cl ON c.id_cliente = cl.id
            ORDER BY " . $columnas[$criterio] . " ASC
            ";

            // Ejecuto Prepare
            // Crear un objeto de la clase PDOStatement
            $stmt = $this->pdo->prepare($sql);

            // establezco el tipo de fetch a objeto
            $stmt->setFetchMode(PDO::FETCH_OBJ);

            // Ejecuto el comando sql
            $stmt->execute();

            // devuelve objeto de la clase PDOStatement
            return $stmt;
        } catch (PDOException $e) {

            // mostrar error de base de datos
            include 'views/partials/errorDB.partial.php';

            // paro la ejecución 
            return false;
        } 
    }

    /*
        método: filter()
        descripción: busca cuentas en la base de datos por número de cuenta, cliente o saldo
        parámetros: 
            - $prompt: cadena de texto con la expresión de búsqueda
        devuelve: 
            - objeto PDOStatement con los resultados de la búsqueda
            - false si hay algún error
    */
    public function filter($prompt)
    {
        try {

            $sql = "
            SELECT *
                FROM (
                    SELECT 
                        c.id,
                        c.num_cuenta,
                        CONCAT(cl.apellidos, ', ', cl.nombre) AS cliente,
                        c.fecha_alta,
                        c.fecha_ul_mov,
                        c.num_movtos,
                        c.saldo
                    FROM cuentas AS c
                    LEFT JOIN clientes AS cl ON c.id_cliente = cl.id
                ) AS sub
            WHERE CONCAT_WS(' ', sub.id, sub.num_cuenta, sub.cliente, sub.fecha_alta, sub.fecha_ul_mov, sub.num_movtos, sub.saldo, '') LIKE :prompt
            ORDER BY sub.id ASC
            ";

            // Ejecuto Prepare
            // Crear un objeto de la clase PDOStatement
            $stmt = $this->pdo->prepare($sql);

            // establezco el tipo de fetch a objeto
            $stmt->setFetchMode(PDO::FETCH_OBJ);

            // vinculo el parámetro de búsqueda con los comodines %
            $like_prompt = '%' . $prompt . '%';
            $stmt->bindParam(':prompt', $like_prompt, PDO::PARAM_STR);

            // Ejecuto el comando sql
            $stmt->execute();

            // devuelve objeto de la clase PDOStatement
            return $stmt;
        } catch (PDOException $e) {

            // mostrar error de base de datos
            include 'views/partials/errorDB.partial.php';

            // paro la ejecución 
            return false;
        } 
    }
}

?>
