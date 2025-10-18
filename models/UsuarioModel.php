<?php

class UsuarioModel{
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

    public function getUsuario($usuario){
        $db=$this->crearConexion();
        $sentencia= $db->prepare("SELECT * FROM user WHERE usuario = ?");
        $sentencia->execute([$usuario]);
        $user=$sentencia->fetch(PDO::FETCH_OBJ);

        return $user;  
    }   
}