<?php
require_once 'libs/Smarty.class.php';

class CategoriaView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base_url', BASE_URL);       
    }

    public function mostrarCategorias($categorias){
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('categorias.tpl');

    }

     public function mostrarFormAddCategoria(){
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('formAgregarCategoria.tpl');
    }

    public function mostrarFormEditCategoria($categoria){
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->display('formEditarCategoria.tpl'); 
    }
}