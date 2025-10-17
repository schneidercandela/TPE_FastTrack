<?php
require_once 'controllers/ProductoController.php';
require_once 'controllers/CategoriaController.php';
require_once 'controllers/PublicController.php';

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
    default: 
        echo "ERROR";
        break;
}