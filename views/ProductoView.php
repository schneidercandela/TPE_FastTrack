<?php
require_once 'libs/Smarty.class.php';

class ProductoView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base_url', BASE_URL);       
    }

    public function mostrarProductos($productos){
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('productos.tpl');

    }

    public function mostrarProductosPorCategoria($productos, $categoria){
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('productosPorCategoria.tpl');
    }
}