<?php
require_once 'config.php';

class BaseModel {

    protected function crearConexion() {
        try {
            $pdo = new PDO('mysql:host=' . DB_HOST, DB_USER, DB_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Crear la base si no existe
            $pdo->exec("CREATE DATABASE IF NOT EXISTS `" . DB_NAME . "` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci");

            // Conectarse a la base recién creada
            $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Crear tablas si no existen
            $this->crearTablas($pdo);

            return $pdo;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    private function crearTablas($pdo) {
        // Categoría
        $pdo->exec("
            CREATE TABLE IF NOT EXISTS categoria (
                id_categoria INT AUTO_INCREMENT PRIMARY KEY,
                nombre VARCHAR(100) NOT NULL
            );
        ");

        // Producto
        $pdo->exec("
            CREATE TABLE IF NOT EXISTS producto (
                id_producto INT AUTO_INCREMENT PRIMARY KEY,
                nombre VARCHAR(100) NOT NULL,
                detalle TEXT,
                categoria INT,
                FOREIGN KEY (categoria) REFERENCES categoria(id_categoria)
            );
        ");

        // Usuario
        $pdo->exec("
            CREATE TABLE IF NOT EXISTS user (
                id INT AUTO_INCREMENT PRIMARY KEY,
                usuario VARCHAR(50) NOT NULL,
                password VARCHAR(255) NOT NULL
            );
        ");

        // Insertar datos iniciales si están vacías
        $this->insertarDatosIniciales($pdo);
    }

    private function insertarDatosIniciales($pdo) {
        $count = $pdo->query("SELECT COUNT(*) FROM categoria")->fetchColumn();
        if ($count == 0) {
            $pdo->exec("INSERT INTO categoria (nombre) VALUES ('Hombre'), ('Mujer')");
        }

        $count = $pdo->query("SELECT COUNT(*) FROM producto")->fetchColumn();
        if ($count == 0) {
   
            $pdo->exec("INSERT INTO producto (nombre, detalle, categoria) VALUES ('Short Deportivo', 'Short ligero para entrenamientos', 1)");
            $pdo->exec("INSERT INTO producto (nombre, detalle, categoria) VALUES ('Remera Dry Fit', 'Remera transpirable para correr', 1)");
            $pdo->exec("INSERT INTO producto (nombre, detalle, categoria) VALUES ('Pantalón de Chándal', 'Pantalón cómodo para gimnasio', 1)");
            $pdo->exec("INSERT INTO producto (nombre, detalle, categoria) VALUES ('Zapatillas Running', 'Zapatillas ligeras y resistentes', 1)");
            $pdo->exec("INSERT INTO producto (nombre, detalle, categoria) VALUES ('Camiseta sin mangas', 'Camiseta deportiva de algodón y elastano', 1)");
            $pdo->exec("INSERT INTO producto (nombre, detalle, categoria) VALUES ('Calza Deportiva', 'Calza de elastano 100% para yoga o gym', 2)");
            $pdo->exec("INSERT INTO producto (nombre, detalle, categoria) VALUES ('Top Deportivo', 'Top cómodo y transpirable para entrenamientos', 2)");
            $pdo->exec("INSERT INTO producto (nombre, detalle, categoria) VALUES ('Remera Fit', 'Remera ajustada para actividad física', 2)");
            $pdo->exec("INSERT INTO producto (nombre, detalle, categoria) VALUES ('Short Corto', 'Short ligero para correr o gym', 2)");
            $pdo->exec("INSERT INTO producto (nombre, detalle, categoria) VALUES ('Zapatillas Fitness', 'Zapatillas ligeras para entrenamiento en sala', 2)");


        }

        $count = $pdo->query("SELECT COUNT(*) FROM user")->fetchColumn();
        if ($count == 0) {
            $pdo->exec("INSERT INTO user (usuario, password) VALUES ('webadmin', 'admin')");
        }
    }
}