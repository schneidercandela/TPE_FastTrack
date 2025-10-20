<?php

require_once 'BaseModel.php';

class UsuarioModel extends BaseModel{

    public function getUsuario($usuario){
        $db=$this->crearConexion();
        $sentencia= $db->prepare("SELECT * FROM user WHERE usuario = ?");
        $sentencia->execute([$usuario]);
        $user=$sentencia->fetch(PDO::FETCH_OBJ);

        return $user;  
    }   
}