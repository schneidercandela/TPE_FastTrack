<?php

require_once 'BaseModel.php';

class CategoriaModel extends BaseModel{

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

    public function deleteCategoriaById($id){
        $db=$this->crearConexion();
        $sentencia= $db->prepare("DELETE FROM categoria WHERE categoria.id_categoria = ?");
        $sentencia->execute([$id]); 
    }

    public function agregarCategoria($nombre){
        $db=$this->crearConexion();
        $sentencia= $db->prepare("INSERT INTO categoria (nombre) VALUES (?)");
        $sentencia->execute([$nombre]); 
    }

    public function updateCategoriaById($nombre, $id){
        $db=$this->crearConexion();
        $sentencia= $db->prepare("UPDATE categoria SET nombre = ? WHERE id_categoria = ?");
        $sentencia->execute([$nombre, $id]); 
        if (!$sentencia->execute([$nombre, $id])) {
            $error = $sentencia->errorInfo();
            error_log("Error al actualizar la categoría: " . $error[2]);
        }
    }
}


