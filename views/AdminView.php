<?php

require_once 'libs/Smarty.class.php';

class AdminView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base_url', BASE_URL);       
    }   

    public function displayPanel($productos, $categorias){
        $this->smarty->assign('productos', $productos);
        $this->smarty->assign('categorias', $categorias);
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $this->smarty->assign('usuario_logueado', isset($_SESSION['admin']));
        $this->smarty->display('panelAdmin.tpl');
        $_SESSION['admin'] = 'usuario';
    } 
}