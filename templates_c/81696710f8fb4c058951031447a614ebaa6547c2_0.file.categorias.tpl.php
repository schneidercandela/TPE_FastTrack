<?php
/* Smarty version 3.1.34-dev-7, created on 2025-10-20 02:43:26
  from 'C:\xampp\htdocs\TPEWeb2_FastTrack\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_68f585aea25467_64231611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81696710f8fb4c058951031447a614ebaa6547c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2_FastTrack\\templates\\categorias.tpl',
      1 => 1760921004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68f585aea25467_64231611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">Categorías</h1>
            <p class="page-subtitle">Explora nuestras categorías de productos</p>
        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['categorias']->value) {?>
        <div class="categories-grid">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
            <div class="category-card">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
productosporcategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">
                    <div class="category-icon">
                        <i class="fas fa-running fa-3x"></i>
                    </div>
                    <div class="category-content">
                        <h2><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</h2>
                        <p>Descubre nuestra colección completa</p>
                        <span class="category-action">
                            Explorar <i class="fas fa-arrow-right"></i>
                        </span>
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
            <i class="fas fa-folder-open fa-4x"></i>
            <h2>No hay categorías disponibles</h2>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="btn btn-primary">Volver al inicio</a>
        </div>
        <?php }?>
    </div>
</main>

<style>
    .categories-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        padding: 40px 0;
    }
    
    .category-card {
        background: linear-gradient(135deg, #1a1a1a, #2a2a2a);
        border: 2px solid rgba(0, 255, 136, 0.2);
        border-radius: 20px;
        padding: 40px;
        text-align: center;
        transition: all 0.4s;
        position: relative;
        overflow: hidden;
    }
    
    .category-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(0, 255, 136, 0.1) 0%, transparent 70%);
        opacity: 0;
        transition: opacity 0.4s;
    }
    
    .category-card:hover::before {
        opacity: 1;
    }
    
    .category-card:hover {
        transform: translateY(-10px);
        border-color: #00ff88;
        box-shadow: 0 20px 40px rgba(0, 255, 136, 0.3);
    }
    
    .category-card a {
        text-decoration: none;
        color: inherit;
    }
    
    .category-icon {
        color: #00ff88;
        margin-bottom: 25px;
        transition: all 0.4s;
    }
    
    .category-card:hover .category-icon {
        transform: scale(1.1);
        filter: drop-shadow(0 0 20px rgba(0, 255, 136, 0.8));
    }
    
    .category-content h2 {
        color: #fff;
        font-size: 2em;
        margin-bottom: 15px;
    }
    
    .category-content p {
        color: #999;
        margin-bottom: 20px;
    }
    
    .category-action {
        color: #00ff88;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s;
    }
    
    .category-card:hover .category-action {
        transform: translateX(10px);
    }
</style>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
