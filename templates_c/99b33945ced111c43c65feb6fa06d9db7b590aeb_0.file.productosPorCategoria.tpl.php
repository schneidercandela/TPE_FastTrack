<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-20 02:34:31
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\productosPorCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f58397cd13d9_69275172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99b33945ced111c43c65feb6fa06d9db7b590aeb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\productosPorCategoria.tpl',
      1 => 1760920466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f58397cd13d9_69275172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                <?php if ($_smarty_tpl->tpl_vars['categoria']->value) {?>
                    <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>

                <?php } else { ?>
                    Productos
                <?php }?>
            </h1>
            <p class="page-subtitle">Explora nuestra selección</p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categorias" class="btn-back">
                <i class="fas fa-arrow-left"></i> Volver a categorías
            </a>
        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['productos']->value && count($_smarty_tpl->tpl_vars['productos']->value) > 0) {?>
        <div class="products-grid">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
            <div class="product-card">
                <div class="product-image">
                    <span class="product-badge">HOT</span>
                    <i class="fas fa-tshirt fa-4x"></i>
                </div>
                <div class="product-content">
                    <h3><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h3>
                    <?php if ($_smarty_tpl->tpl_vars['producto']->value->detalle) {?>
                    <p class="product-description"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['producto']->value->detalle,100,"...");?>
</p>
                    <?php }?>
                    <div class="product-actions">
                        <span class="price">$14.999</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
detalleproducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" class="btn-detail">
                            Ver detalles <i class="fas fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <?php } else { ?>
        <div class="empty-state">
            <i class="fas fa-inbox fa-4x"></i>
            <h2>No hay productos en esta categoría</h2>
            <p>Pronto agregaremos productos aquí</p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categorias" class="btn btn-primary">Ver otras categorías</a>
        </div>
        <?php }?>
    </div>
</main>

<style>
    .btn-back {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #00ff88;
        text-decoration: none;
        margin-top: 20px;
        transition: all 0.3s;
    }
    
    .btn-back:hover {
        transform: translateX(-5px);
    }
    
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 30px;
        padding: 40px 0;
    }
    
    .product-card {
        background: rgba(26, 26, 26, 0.9);
        border-radius: 15px;
        overflow: hidden;
        border: 1px solid rgba(0, 255, 136, 0.1);
        transition: all 0.3s;
    }
    
    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 40px rgba(0, 255, 136, 0.3);
        border-color: #00ff88;
    }
    
    .product-image {
        height: 200px;
        background: linear-gradient(135deg, rgba(0, 255, 136, 0.1), rgba(0, 255, 136, 0.05));
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }
    
    .product-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: #ff0066;
        color: #fff;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.8em;
        font-weight: 600;
    }
    
    .product-content {
        padding: 25px;
    }
    
    .product-content h3 {
        color: #fff;
        font-size: 1.5em;
        margin-bottom: 12px;
    }
    
    .product-description {
        color: #999;
        line-height: 1.6;
        margin-bottom: 20px;
    }
    
    .product-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .price {
        font-size: 1.8em;
        color: #00ff88;
        font-weight: bold;
    }
    
    .btn-detail {
        background: linear-gradient(90deg, #00ff88, #00cc6e);
        color: #000;
        padding: 10px 20px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    
    .btn-detail:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 255, 136, 0.4);
    }
</style>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
