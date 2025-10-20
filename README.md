# TPE Web 2 - Fast Track

## Integrantes
- Jeremias Rodriguez Miranda (jeremias.rod.m@gmail.com)
- Candela Schneider D'Amico (schneider.candela@gmail.com)

## Temática
Tienda de ropa deportiva.

## Descripción de la temática
El sitio web dinámico de la tienda de ropa deportiva Fast Track muestra una variedad de productos deportivos (zapatillas, remeras, shorts, etc.) clasificados en diferentes categorías.

Los datos de este sitio se organizan en un modelo de relación de 1 a N, en donde cada producto pertenece a una sola categoría.

Cualquier persona puede acceder al sitio y navegar en él pero solo el usuario que es administrador podrá realizar acciones sobre los items, tales como: crear, modificar o eliminar.

## Instrucciones de instalación

### Requisitos
Para poder ejecutar este proyecto es necesario tener instalado:
- XAMPP o cualquier servidor web con Apache y MySQL
- PHP version 7.4 o superior
- Un navegador web actualizado

### Pasos para la instalación

1. Descargar o clonar el repositorio en la carpeta htdocs de XAMPP (generalmente ubicada en C:\xampp\htdocs\ en Windows).

2. Iniciar los servicios de Apache y MySQL desde el panel de control de XAMPP.

3. Crear la base de datos:
   - Acceder a phpMyAdmin mediante http://localhost/phpmyadmin
   - Crear una nueva base de datos llamada "db_fasttrack"
   - Importar el archivo db_fasttrack.sql que se encuentra en el proyecto (si no existe, crear las tablas manualmente según el modelo de datos del proyecto)

4. Configurar la conexión a la base de datos:
   - Verificar que en los archivos de los modelos la configuración sea:
     - Host: localhost
     - Usuario: root
     - Contraseña: (dejar vacío para XAMPP por defecto)
     - Base de datos: db_fasttrack

5. Acceder al sitio mediante la URL: http://localhost/TPEWeb2_FastTrack/

### Estructura de la base de datos

La base de datos cuenta con tres tablas principales:

**Tabla categoria:**
- id_categoria (INT, clave primaria, autoincremental)
- nombre (VARCHAR 100)
- imagen (VARCHAR 255, opcional)

**Tabla producto:**
- id_producto (INT, clave primaria, autoincremental)  
- nombre (VARCHAR 100)
- detalle (TEXT, opcional)
- categoria (INT, clave foránea que referencia a categoria)
- precio (DECIMAL)
- imagen (VARCHAR 255, opcional)

**Tabla user:**
- id (INT, clave primaria, autoincremental)
- usuario (VARCHAR 50, único)
- password (VARCHAR 255)

## Información de acceso

### Credenciales del administrador
Para acceder al panel de administración utilizar:
- Usuario: webadmin
- Contraseña: admin

### Funcionalidades según tipo de usuario

**Usuarios no registrados pueden:**
- Ver el listado completo de productos
- Ver productos por categoría
- Ver el detalle de cada producto
- Navegar por las diferentes categorías

**El administrador puede:**
- Realizar todas las acciones de un usuario no registrado
- Acceder al panel de administración mediante el login
- Agregar nuevos productos
- Editar productos existentes
- Eliminar productos

## Estructura del proyecto

El proyecto sigue el patrón de diseño MVC (Modelo-Vista-Controlador) y está organizado de la siguiente manera:

- **/controllers**: Contiene los controladores que manejan la lógica del negocio
  - AdminController.php
  - AuthController.php
  - CategoriaController.php
  - ProductoController.php
  - PublicController.php

- **/models**: Contiene los modelos que interactúan con la base de datos
  - CategoriaModel.php
  - ProductoModel.php
  - UsuarioModel.php

- **/views**: Contiene las vistas que se encargan de mostrar la información
  - AdminView.php
  - CategoriaView.php
  - ProductoView.php
  - PublicView.php

- **/templates**: Contiene las plantillas de Smarty
  - Archivos .tpl para cada sección del sitio

- **/libs**: Librerías externas (Smarty)

- **router.php**: Archivo principal que maneja las rutas del sitio

- **.htaccess**: Configuración para las URLs amigables

Para cualquier consulta o problema con el proyecto, contactar a los integrantes del grupo mediante los correos proporcionados.