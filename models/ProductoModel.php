<?php

require_once 'BaseModel.php';

class ProductoModel extends BaseModel{

    public function getProductos(){
        $db=$this->crearConexion();
        $sentencia = $db->prepare(" SELECT p.*, c.nombre AS categoria_nombre FROM producto p JOIN categoria c ON p.categoria = c.id_categoria ");
        $sentencia->execute();
        $productos=$sentencia->fetchAll(PDO::FETCH_OBJ);

        return $productos;  
    }
    
    public function getProductosByIdCategoria($id){
        $db=$this->crearConexion();
        $sentencia= $db->prepare("SELECT * FROM producto WHERE producto.categoria = ?");
        $sentencia->execute([$id]);
        $productos=$sentencia->fetchAll(PDO::FETCH_OBJ);

        return $productos;  
    }

    public function getProductoById($id){
        $db=$this->crearConexion();
        $sentencia= $db->prepare("SELECT * FROM producto WHERE producto.id_producto = ?");
        $sentencia->execute([$id]);
        $producto=$sentencia->fetch(PDO::FETCH_OBJ);

        return $producto; 
    }

    public function deleteProductoById($id){
        $db=$this->crearConexion();
        $sentencia= $db->prepare("DELETE FROM producto WHERE producto.id_producto = ?");
        $sentencia->execute([$id]); 
    }

    public function agregarProducto($nombre, $detalle, $id_categoria){
        $db=$this->crearConexion();
        $sentencia= $db->prepare("INSERT INTO producto (nombre, detalle, categoria) VALUES (?, ?, ?)");
        $sentencia->execute([$nombre, $detalle, $id_categoria]); 
    }

    public function updateProductoById($id, $nombre, $detalle, $id_categoria){
        $db=$this->crearConexion();
        $sentencia= $db->prepare("UPDATE producto SET nombre = ?, detalle = ?, categoria = ? WHERE id_producto = ?");
        $sentencia->execute([$nombre, $detalle, $id_categoria, $id]); 
    }
}