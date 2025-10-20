<?php

require_once 'models/UsuarioModel.php';

class AuthController{

    private $model;

    public function __construct(){
        session_start();
        $this->model = new UsuarioModel;
    }

    public function login() {
        $usuarioIngresado = $_POST['usuario'];
        $passwordIngresada = $_POST['password'];

        $usuario = $this->model->getUsuario($usuarioIngresado);

        if ($usuario && $passwordIngresada === $usuario->password) {
            $_SESSION['IS_LOGGED'] = true;
            $_SESSION['USER_NAME'] = $usuario->usuario;

            header("Location: " . BASE_URL . "admin");
        } else {
            header("Location: " . BASE_URL . "formLogin");
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . "formlogin");
    }
}