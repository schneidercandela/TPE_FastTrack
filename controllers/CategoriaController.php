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

    public function deleteCategoria($id){
        $this->model->deleteCategoriaById($id);
        header("Location: ".BASE_URL."admin");
    }

    public function formAddCategoria(){
        $this->view->mostrarFormAddCategoria();
    }

    public function addCategoria(){
       if (isset($_POST['nombre'])) {

            $nombre = $_POST['nombre'];
            if (!empty($nombre)){
                $this->model->agregarCategoria($nombre);
            }
        } 
        header("Location: " . BASE_URL . "admin");
    }

    public function formEditCategoria($id){
        $categoria = $this->model->getCategoriaById($id);

        if (!$categoria) {
            echo "⚠️ No se encontró categoria";
            die();
        }

        $this->view->mostrarFormEditCategoria($categoria);
    }

    public function editCategoria() {
        if(isset($_POST['id_categoria'], $_POST['nombre'])) {
            $id = $_POST['id_categoria'];
            $nombre = $_POST['nombre'];

            $this->model->updateCategoriaById($nombre, $id);
        }

        header("Location: " . BASE_URL . "admin");
    }
}