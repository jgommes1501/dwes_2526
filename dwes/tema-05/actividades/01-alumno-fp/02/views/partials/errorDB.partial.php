 <?php
            echo "Error de conexión a la base de datos:<br>";
            echo "Mensaje " . $e->getMessage() . "<br>";
            echo "Código de error: " . $e->getCode() . "<br>";
            echo "Fichero: " . $e->getFile() . "<br>";
            echo "Línea: " . $e->getLine() . "<br>";

?>