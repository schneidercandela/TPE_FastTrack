<?php

class CategoriaModel{
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

    public function getCategorias(){
        $db=$this->crearConexion();
        $sentencia= $db->prepare("SELECT * FROM categoria");
        $sentencia->execute();
        $categorias=$sentencia->fetchAll(PDO::FETCH_OBJ);

        return $categorias;  
    }

     public function getCategoriaById($id){
        $db=$this->crearConexion();
        $sentencia= $db->prepare("SELECT * FROM categoria WHERE categoria.id_categoria = ?");
        $sentencia->execute([$id]);
        $categoria =$sentencia->fetch(PDO::FETCH_OBJ);

        return $categoria;  
    }
}


