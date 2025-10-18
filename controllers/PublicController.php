<?php

require_once 'views/PublicView.php';
require_once 'models/ProductoModel.php';
require_once 'models/CategoriaModel.php';

class PublicController {
    private $publicView;
    private $modelProducto;
    private $modelCategoria;

    public function __construct(){
        $this->publicView = new PublicView();
        $this->modelProducto = new ProductoModel();
        $this->modelCategoria = new CategoriaModel();
    }

    public function showHome(){
        $productos = $this->modelProducto->getProductos();
        $categorias = $this->modelCategoria->getCategorias();
        $this->publicView->showHome($productos, $categorias);
    }

    public function showFormLogin(){
        $this->publicView->mostrarFormulario();
    }
}