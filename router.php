<?php
require_once 'controllers/ProductoController.php';
require_once 'controllers/CategoriaController.php';
require_once 'controllers/PublicController.php';
require_once 'controllers/AuthController.php';
require_once 'controllers/AdminController.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (empty($_GET['action'])) {
    $_GET['action'] = 'home';
}

$action = $_GET['action'];
$param = explode('/', $action);

switch($param[0]){
    case 'home': 
        $controller = new PublicController();
        $controller->showHome();
        break;
    case 'categorias': 
        $controller = new CategoriaController();
        $controller->showCategorias();
        break;   
    case 'productos':
        $controller = new ProductoController();
        $controller->showProductos();
        break; 
    case 'productosporcategoria':
        $controller = new ProductoController();
        $controller->showProductoPorCategoria($param[1]);
        break; 
    case 'detalleproducto':
        $controller = new ProductoController();
        $controller->showDetalleProducto($param[1]);
        break;
    case 'formlogin':
        $controller = new PublicController();
        $controller->showFormLogin();
        break;  
    case 'login':
        $controller = new AuthController();
        $controller->Login();
        break;  
    case 'admin':
        $controller = new AdminController();
        $controller->showPanel();
        break; 
    case 'eliminarproducto':
        $controller = new ProductoController();
        $controller->deleteProducto($param[1]);
        break;   
    case 'formagregarproducto':
        $controller = new ProductoController();
        $controller->formAddProducto();
        break;
    case 'agregarproducto':
        $controller = new ProductoController();
        $controller->addProducto();
        break;     
     case 'formeditarproducto':
        $controller = new ProductoController();
        $controller->formEditProducto($param[1]);
        break;
    case 'editarproducto':
        $controller = new ProductoController();
        $controller->editProducto();
        break;           
    default: 
        echo "ERROR";
        break;
}