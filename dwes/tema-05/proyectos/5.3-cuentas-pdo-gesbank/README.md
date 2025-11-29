# Proyecto 5.3 - CRUD Cuentas PDO - GESBANK

## Descripción
Proyecto CRUD completo para la gestión de cuentas bancarias usando PDO y MySQL. Permite realizar operaciones de creación, lectura, actualización y eliminación de cuentas, así como ordenación y filtrado.

## Base de Datos
- **Nombre**: gesbank
- **Tablas**: clientes, cuentas, movimientos
- **Script SQL**: `bbdd/gesbank.sql`

## Estructura del Proyecto

```
5.3-cuentas-pdo-gesbank/
│
├── bbdd/
│   └── gesbank.sql           # Script de creación de la base de datos
│
├── class/
│   ├── conexion.class.php    # Clase para conexión PDO
│   ├── cuenta.class.php      # Clase entidad Cuenta
│   └── tabla_cuentas.class.php # Clase con métodos CRUD
│
├── config/
│   └── configDB.php          # Configuración de la base de datos
│
├── models/
│   ├── index.model.php       # Modelo principal
│   ├── new.model.php         # Modelo para nueva cuenta
│   ├── create.model.php      # Modelo para crear cuenta
│   ├── edit.model.php        # Modelo para editar cuenta
│   ├── update.model.php      # Modelo para actualizar cuenta
│   ├── delete.model.php      # Modelo para eliminar cuenta
│   ├── show.model.php        # Modelo para mostrar cuenta
│   ├── order.model.php       # Modelo para ordenar cuentas
│   └── search.model.php      # Modelo para filtrar cuentas
│
├── views/
│   ├── layouts/
│   │   ├── head.layout.php          # Bootstrap CSS y meta tags
│   │   └── js_bootstrap.layout.php  # Bootstrap JavaScript
│   │
│   ├── partials/
│   │   ├── header.partial.php   # Cabecera de la aplicación
│   │   ├── footer.partial.php   # Pie de página
│   │   ├── menu.partial.php     # Menú de navegación
│   │   ├── error.partial.php    # Mensajes de error
│   │   ├── errorDB.partial.php  # Error de base de datos
│   │   └── notify.partial.php   # Notificaciones
│   │
│   ├── index.view.php    # Vista principal (tabla de cuentas)
│   ├── new.view.php      # Vista formulario nueva cuenta
│   ├── edit.view.php     # Vista formulario editar cuenta
│   └── show.view.php     # Vista detalles de cuenta
│
├── index.php    # Controlador principal
├── new.php      # Controlador nueva cuenta
├── create.php   # Controlador crear cuenta
├── edit.php     # Controlador editar cuenta
├── update.php   # Controlador actualizar cuenta
├── delete.php   # Controlador eliminar cuenta
├── show.php     # Controlador mostrar cuenta
├── order.php    # Controlador ordenar cuentas
└── search.php   # Controlador buscar/filtrar cuentas
```

## Funcionalidades

### 1. Index (index.php)
Muestra todas las cuentas en formato tabla con los siguientes campos:
- ID
- Número de cuenta
- Cliente (apellidos, nombre)
- Fecha de alta
- Fecha último movimiento
- Número de movimientos
- Saldo

### 2. Nueva Cuenta (new.php)
Formulario para crear una nueva cuenta con:
- Número de cuenta
- Lista desplegable de clientes
- Fecha de alta
- Fecha último movimiento
- Número de movimientos
- Saldo

### 3. Editar Cuenta (edit.php)
Formulario para editar los datos de una cuenta existente con los mismos campos que nueva cuenta, pero precargados con los datos actuales.

### 4. Mostrar Cuenta (show.php)
Vista de solo lectura que muestra todos los detalles de una cuenta sin posibilidad de edición.

### 5. Eliminar Cuenta (delete.php)
Elimina definitivamente una cuenta tras la confirmación en el navegador.

### 6. Ordenar Cuentas (order.php)
Ordena las cuentas por cualquiera de las siguientes columnas:
1. ID
2. Número de cuenta
3. Cliente
4. Fecha de alta
5. Fecha último movimiento
6. Número de movimientos
7. Saldo

### 7. Filtrar/Buscar Cuentas (search.php)
Busca cuentas por cualquier campo visible utilizando una expresión de búsqueda.

## Clases

### class_conexion
Gestiona la conexión a la base de datos usando PDO con manejo de errores.

### class_cuenta
Clase entidad con las propiedades públicas de una cuenta:
- id
- num_cuenta
- id_cliente
- fecha_alta
- fecha_ul_mov
- num_movtos
- saldo

### class_tabla_cuentas
Clase hija de `class_conexion` con los siguientes métodos:

- **get_cuentas()**: Obtiene todas las cuentas con JOIN a clientes
- **get_clientes()**: Obtiene array asociativo de clientes para desplegables
- **create($cuenta)**: Crea una nueva cuenta
- **read($id)**: Obtiene los datos de una cuenta por ID
- **update($cuenta, $id)**: Actualiza una cuenta existente
- **delete($id)**: Elimina una cuenta
- **order($criterio)**: Ordena cuentas por columna especificada
- **filter($prompt)**: Filtra cuentas por expresión de búsqueda

## Configuración

### Base de Datos
Editar `config/configDB.php` con los datos de conexión:
```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'gesbank');
define('DB_USER', 'root');
define('DB_PASS', '');
```

### Instalación
1. Importar el script SQL `bbdd/gesbank.sql` en MySQL
2. Configurar los datos de conexión en `config/configDB.php`
3. Asegurarse de que el servidor web (Apache/XAMPP) esté ejecutándose
4. Acceder a través del navegador: `http://localhost/dwes/tema-05/proyectos/5.3-cuentas-pdo-gesbank/`

## Tecnologías Utilizadas
- **PHP**: Lenguaje de programación del lado del servidor
- **PDO**: PHP Data Objects para acceso a base de datos
- **MySQL**: Sistema de gestión de base de datos
- **Bootstrap 5.3.8**: Framework CSS para diseño responsive
- **Bootstrap Icons**: Librería de iconos

## Características Técnicas
- Arquitectura MVC (Modelo-Vista-Controlador)
- POO sin encapsulamiento (propiedades públicas)
- Uso de PDO con consultas preparadas para prevenir inyección SQL
- Validación de formularios HTML5
- Confirmaciones JavaScript para operaciones críticas
- Mensajes de notificación y error
- Diseño responsive con Bootstrap

## Autor
Juan Carlos Moreno - DWES - 2º DAW - Curso 24/25
