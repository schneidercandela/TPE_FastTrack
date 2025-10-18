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

    public function mostrarDetalleProducto($producto, $categoria){
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->assign('producto', $producto);
        $this->smarty->display('detalleProducto.tpl');
    }

    public function mostrarFormAddProducto($categorias){
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('formAgregarProducto.tpl');
    }

    public function mostrarFormEditProducto($producto, $categorias){
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('producto', $producto);
        $this->smarty->display('formEditarProducto.tpl'); 
    }
}