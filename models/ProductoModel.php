<?php

class ProductoModel{
    private function crearConexion(){
        $host='localhost';
        $userName='root';
        $password='';
        $database= 'db_fasttrack';

        try{
            $pdo= new PDO ("mysql:host=$host;dbname=$database;charset=utf8", $userName,$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);    
        }
        catch (Exception $e){
            var_dump($e);
        }
        return $pdo;
    }

    public function getProductos(){
        $db=$this->crearConexion();
        $sentencia= $db->prepare("SELECT * FROM producto");
        $sentencia->execute();
        $productos=$sentencia->fetchAll(PDO::FETCH_OBJ);

        return $productos;  
    }
    
      public function getProductosById($id){
        $db=$this->crearConexion();
        $sentencia= $db->prepare("SELECT * FROM producto WHERE producto.categoria = ?");
        $sentencia->execute([$id]);
        $productos=$sentencia->fetchAll(PDO::FETCH_OBJ);

        return $productos;  
    }
}