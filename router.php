<?php
require_once 'controllers/ProductoController.php';
require_once 'controllers/CategoriaController.php';
require_once 'controllers/PublicController.php';
require_once 'controllers/AuthController.php';
require_once 'controllers/AdminController.php';
require_once 'middlewares/authMiddleware.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (empty($_GET['action'])) {
    $_GET['action'] = 'home';
}

$action = $_GET['action'];
$param = explode('/', $action);

$req = new stdClass();
authMiddleware($req);

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
        $controller->login(); 
        break;  
    case 'logout':
        $controller =new AuthController();
        $controller->logout();    
    case 'admin':
        if (!$req->user) {
            header("Location: " . BASE_URL . "formLogin");
            exit;
        }
        $controller = new AdminController();
        $controller->showPanel();
        break; 
    case 'eliminarproducto':
        if (!$req->user) {
            header("Location: " . BASE_URL . "formLogin");
            exit;
        }
        $controller = new ProductoController();
        $controller->deleteProducto($param[1]);
        break;   
    case 'formagregarproducto':
        if (!$req->user) {
            header("Location: " . BASE_URL . "formLogin");
            exit;
        }
        $controller = new ProductoController();
        $controller->formAddProducto();
        break;
    case 'agregarproducto':
        if (!$req->user) {
            header("Location: " . BASE_URL . "formLogin");
            exit;
        }
        $controller = new ProductoController();
        $controller->addProducto();
        break;     
    case 'formeditarproducto':
        if (!$req->user) {
            header("Location: " . BASE_URL . "formLogin");
            exit;
        }
        $controller = new ProductoController();
        $controller->formEditProducto($param[1]);
        break;
    case 'editarproducto':
        if (!$req->user) {
            header("Location: " . BASE_URL . "formLogin");
            exit;
        }
        $controller = new ProductoController();
        $controller->editProducto();
        break;
    case 'eliminarcategoria':
        if (!$req->user) {
            header("Location: " . BASE_URL . "formLogin");
            exit;
        }
        $controller = new CategoriaController();
        $controller->deleteCategoria($param[1]);
        break;   
    case 'formagregarcategoria':
        if (!$req->user) {
            header("Location: " . BASE_URL . "formLogin");
            exit;
        }
        $controller = new CategoriaController();
        $controller->formAddCategoria();
        break;
    case 'agregarcategoria':
        if (!$req->user) {
            header("Location: " . BASE_URL . "formLogin");
            exit;
        }
        $controller = new CategoriaController();
        $controller->addCategoria();
        break;     
    case 'formeditarcategoria':
        if (!$req->user) {
            header("Location: " . BASE_URL . "formLogin");
            exit;
        }
        $controller = new CategoriaController();
        $controller->formEditCategoria($param[1]);
        break;
    case 'editarcategoria':
        if (!$req->user) {
            header("Location: " . BASE_URL . "formLogin");
            exit;
        }
        $controller = new CategoriaController();
        $controller->editCategoria();
        break;           
    default: 
        header("HTTP/1.0 404 Not Found");
        echo "ERROR 404: Página no encontrada";
        break;
}