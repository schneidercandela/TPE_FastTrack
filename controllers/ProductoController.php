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
        $productos = $this->model->getProductosByIdCategoria($id);
        $categoria = $this->modelCategoria->getCategoriaById($id);
        $this->view->mostrarProductosPorCategoria($productos, $categoria);
    }

    public function showDetalleProducto($id){
        $producto = $this->model->getProductoById($id);
        $categoria = $this->modelCategoria->getCategoriaById($producto->categoria);
        $this->view->mostrarDetalleProducto($producto, $categoria);
    }

    public function deleteProducto($id){
        $this->model->deleteProductoById($id);
        header("Location: ".BASE_URL."admin");
    }

    public function formAddProducto(){
        $categorias = $this->modelCategoria->getCategorias();
        $this->view->mostrarFormAddProducto($categorias);
    }

    public function addProducto(){
       if (isset($_POST['nombre'], $_POST['detalle'], $_POST['id_categoria'])) {

            $nombre = $_POST['nombre'];
            $detalle = $_POST['detalle'];
            $id_categoria = $_POST['id_categoria'];

            $this->model->agregarProducto($nombre, $detalle, $id_categoria);
        } 
        header("Location: " . BASE_URL . "admin");
    }

    public function formEditProducto($id){
        $producto = $this->model->getProductoById($id);
        $categorias = $this->modelCategoria->getCategorias();

        if (!$producto) {
            echo "⚠️ No se encontró producto con ID: " . htmlspecialchars($id);
            die();
        }

        $this->view->mostrarFormEditProducto($producto, $categorias);
    }


    public function editProducto() {
        if(isset($_POST['id_producto'], $_POST['nombre'], $_POST['detalle'], $_POST['id_categoria'])) {
            $id = $_POST['id_producto'];
            $nombre = $_POST['nombre'];
            $detalle = $_POST['detalle'];
            $id_categoria = $_POST['id_categoria'];

            $this->model->updateProductoById($id, $nombre, $detalle, $id_categoria);
        }

        header("Location: " . BASE_URL . "admin");
    }
}
