<?php

require_once 'views/ProductoView.php';
require_once 'models/ProductoModel.php';
require_once 'models/CategoriaModel.php';

class ProductoController{
    private $model;
    private $view;
    private $modelCategoria;

    public function __construct(){
        $this->model = new ProductoModel();
        $this->view = new ProductoView();
        $this->modelCategoria = new CategoriaModel();
    }

    public function showProductos(){
        $productos = $this->model->getProductos();
        $this->view->mostrarProductos($productos);
    }

    public function showProductoPorCategoria($id){
        $productos = $this->model->getProductosById($id);
        $categoria = $this->modelCategoria->getCategoriaById($id);
        $this->view->mostrarProductosPorCategoria($productos, $categoria);
    }
}