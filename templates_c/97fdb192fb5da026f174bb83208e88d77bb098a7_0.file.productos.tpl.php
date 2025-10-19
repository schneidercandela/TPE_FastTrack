<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-19 07:08:41
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f47259cbf101_83157834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97fdb192fb5da026f174bb83208e88d77bb098a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\productos.tpl',
      1 => 1760850518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f47259cbf101_83157834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">Todos los Productos</h1>
            <p class="page-subtitle">Encuentra el equipamiento perfecto para tu entrenamiento</p>
        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['productos']->value) {?>
        <div class="products-grid">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
            <div class="product-card">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
detalleproducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">
                    <div class="product-image">
                        <div class="product-overlay">
                            <span class="view-details">Ver Detalles</span>
                        </div>
                        <i class="fas fa-tshirt fa-4x"></i>
                    </div>
                    <div class="product-info">
                        <h3><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h3>
                        <p class="product-category"><?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria_nombre;?>
</p>
                        <div class="product-footer">
                            <span class="price">$12.999</span>
                            <span class="btn-view">Ver más <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <?php } else { ?>
        <div class="empty-state">
            <i class="fas fa-box-open fa-4x"></i>
            <h2>No hay productos disponibles</h2>
            <p>Pronto agregaremos nuevos productos</p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="btn btn-primary">Volver al inicio</a>
        </div>
        <?php }?>
    </div>
</main>

<style>
    .page-header {
        text-align: center;
        padding: 60px 0 40px;
    }
    
    .page-title {
        font-size: 3em;
        color: #00ff88;
        margin-bottom: 15px;
        text-shadow: 0 0 20px rgba(0, 255, 136, 0.3);
    }
    
    .page-subtitle {
        color: #999;
        font-size: 1.2em;
    }
    
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
        padding: 40px 0;
    }
    
    .product-card {
        background: rgba(26, 26, 26, 0.9);
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s;
        border: 1px solid rgba(0, 255, 136, 0.1);
    }
    
    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 40px rgba(0, 255, 136, 0.3);
        border-color: #00ff88;
    }
    
    .product-card a {
        text-decoration: none;
        color: inherit;
    }
    
    .product-image {
        height: 250px;
        background: linear-gradient(135deg, rgba(0, 255, 136, 0.1), rgba(0, 255, 136, 0.05));
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }
    
    .product-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 255, 136, 0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s;
    }
    
    .product-card:hover .product-overlay {
        opacity: 1;
    }
    
    .view-details {
        color: #000;
        font-weight: 600;
        font-size: 1.2em;
    }
    
    .product-info {
        padding: 25px;
    }
    
    .product-info h3 {
        color: #fff;
        margin-bottom: 10px;
        font-size: 1.4em;
    }
    
    .product-category {
        color: #00ff88;
        font-size: 0.9em;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .product-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .price {
        font-size: 1.8em;
        color: #00ff88;
        font-weight: bold;
    }
    
    .btn-view {
        color: #00ff88;
        font-weight: 600;
        transition: all 0.3s;
    }
    
    .product-card:hover .btn-view {
        transform: translateX(5px);
    }
    
    .empty-state {
        text-align: center;
        padding: 100px 20px;
        color: #999;
    }
    
    .empty-state i {
        color: rgba(0, 255, 136, 0.3);
        margin-bottom: 20px;
    }
    
    .empty-state h2 {
        color: #fff;
        margin-bottom: 10px;
    }
</style>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
