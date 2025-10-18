<?php

require_once 'views/AdminView.php';
require_once 'models/productoModel.php';
require_once 'models/categoriaModel.php';

class AdminController{

    private $view;
    private $productoModel;
    private $categoriaModel;

    public function __construct(){
        $this->view = new AdminView();
        $this->productoModel = new ProductoModel();
        $this->categoriaModel = new CategoriaModel();
    }   

    public function showPanel(){
        $productos = $this->productoModel->getProductos();
        $categorias = $this->categoriaModel->getCategorias();
        $this->view->displayPanel($productos, $categorias);
    }
}