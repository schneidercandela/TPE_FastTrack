<?php

require_once 'views/CategoriaView.php';
require_once 'models/CategoriaModel.php';

class CategoriaController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new CategoriaModel();
        $this->view = new CategoriaView();
    }

    public function showCategorias(){
        $categorias = $this->model->getCategorias();
        $this->view->mostrarCategorias($categorias);
    }


}