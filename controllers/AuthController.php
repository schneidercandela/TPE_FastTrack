<?php

require_once 'models/UsuarioModel.php';

class AuthController{

    private $model;

    public function __construct(){

        $this->model = new UsuarioModel;
    }

    public function login(){
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['password'];

        $usuario = $this->model->getUsuario($usuario);

        if($usuario && $contraseña === $usuario->password){
            header("Location: " . BASE_URL . "admin");
        } else {
            header("Location: " . BASE_URL . "formlogin");
        }
    }
}