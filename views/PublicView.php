<?php
require_once 'libs/Smarty.class.php';

class PublicView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base_url', BASE_URL);       
    }

    public function showHome($productos, $categorias){
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('home.tpl');
    }

    public function mostrarFormulario(){
        $this->smarty->display('login.tpl');
    }
}